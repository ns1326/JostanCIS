<?php
    require_once "../private_html/config.inc.php";
    require_once PRIVATE_HTML . "dbconfig.inc.php";

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
        function randomPassword() {
            $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
            $pass = array(); //remember to declare $pass as an array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass); //turn the array into a string
        }

        if ($_POST['email'] == $email) {

            $p = randomPassword();

            $target = "PUBLIC_HTML . '/changepassword.php'";
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
            $message = "Email does not exist."; 
        }

                      
    }    
}
$smarty->assign("message", $message);
$smarty->display("forgotpassword.tpl");
        