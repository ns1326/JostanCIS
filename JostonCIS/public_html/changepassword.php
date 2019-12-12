<?php
    require_once "../private_html/config.inc.php";
    require_once PRIVATE_HTML . "dbconfig.inc.php";

$message1 = "";
$message2 = "";

if (isset($_POST['submit'])) {

    $count = 2;

    $sql = "Select * FROM User Where Salt = :salt";
    $stmt = $pdo->prepare($sql);        
    $stmt->bindParam(":salt", $_POST['salt']);     
    $stmt->execute();   

    if($stmt->rowCount() == 1){
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $userid= $row['User_ID'];
            $salt= $row['Salt'];                         
        }
    } 

    if ($_POST['salt'] != $salt || $_POST['salt'] == "" || $_POST['salt'] == null ) {
        $message1 = "Temporary Password does not exist.";
        $count -= 1;
    } 

    if ($_POST['password'] != "" || $_POST['password'] != null) {      
        if ( $_POST['password'] !=  $_POST['confirmpassword']) {
            $message2 = "Password is not the same.";
            $count -= 1;
        } 
    } else {
        $message2 = "Password and confirm cannot be blank.";
        $count -= 1;
    }     

    if ($count == 2) {
        $sql = "Update User 
                        set Password = :p 
                    Where User_ID = :u";

            $stmt = $pdo->prepare($sql);        
            $stmt->bindParam(":p", $_POST['password']);  
            $stmt->bindParam(":u", $userid);  
            $stmt->execute();

            $sql = "Update User 
                        set SALT = DEFAULT
                    Where User_ID = :u";

            $stmt = $pdo->prepare($sql);        
            $stmt->bindParam(":u", $userid);  
            $stmt->execute();


            header("location: login.php");
    }
}

$smarty->assign("message1", $message1);
$smarty->assign("message2", $message2);
$smarty->display("changepassword.tpl");
