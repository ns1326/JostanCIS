<?php
    require_once "config.inc.php";
    require_once "dbconfig.inc.php";

$message1 = "";
$message2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {

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

        if ($_POST['salt'] == $salt) {
            if ($_POST['password'] != "" || $_POST['password'] != null) {              
            
                if ( $_POST['password'] ==  $_POST['confirmpassword']) {
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
                $message2 = "Password is not the same";
            } else {
                $message1 = "Password and confirm cannot be blank.";
            }            
        } else {
            $message1 = "Temporary Password is incorrect";
        }
    }
}

$smarty->assign("message1", $message1);
$smarty->assign("message2", $message2);
$smarty->display("changepassword.tpl");
