<?php
require "config.inc.php";
require "dbconfig.inc.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])){
        $sql = "Select * FROM User where Email = :e";
        $stmt = $pdo->prepare($sql);        
        $stmt->bindParam(":e", $_POST['email']);  
        $stmt->execute();    

        if($stmt->rowCount() == 1){
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $password= $row['Password'];
                $email= $row['Email'];                              
            }
        } 
        //$rand = rand(0, 9999);

        if ($_POST['email'] == $email) {

            $letter = rand(65, 90);
            $p .= chr($letter);

            $target = "PRIVATE_HTML . '/changepassword.php'";
            $linkname = "link";
            
            $link = link($target, $linkname);

            $to_email = $email;
            $subject = 'Forgot Password';
            //$message = "Your password is $password";
            $post = "Your temporary password will be $p.\n" . "Click this $link to change your password. ";                
            $headers = 'From: teamjoston@gmail.com';

            mail($to_email, $subject, $post, $headers);

            $sql = "Update User 
                        set Salt = :p 
                    Where Email = :e";
            $stmt = $pdo->prepare($sql);        
            $stmt->bindParam(":p", $p);  
            $stmt->bindParam(":e", $email);  
            $stmt->execute();    

            header("location: forgotconfirm.php");
        } else {
            $message = "Email does not exist in the database."; 
        }

                      
    }    
}
$smarty->assign("message", $message);
$smarty->display("forgotpassword.tpl");
        