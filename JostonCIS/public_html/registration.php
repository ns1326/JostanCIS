<?php
        require_once "../private_html/config.inc.php";
        require_once PRIVATE_HTML . "dbconfig.inc.php";

$usermessage = "";
$message1 = "";
$message2 = "";
$message3 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $count = 4;

        //Username error checking
        $trimname = trim($_POST['username']);
        if ($trimname == ""){   // OR if (!preg_match("^[a-zA-Z0-9]*$",$trimname)) {
                $usermessage = "Username must have characters.";    
                $count -= 1;
        } 

        //Password error checking
        if ( $_POST['password'] !=  $_POST['confirmpassword']) { //check whether they both are the same
                $message1 = "Password is not the same."; 
                $count -= 1;
        }  

        //Email error checking
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $message2 = "Your email must consists of @ and .com, .edu and etc.";
                $count -= 1;
        }

        //Date error checking
        function validateDate($date, $format = 'Y-m-d') {
                $d = DateTime::createFromFormat($format, $date);
                // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits 
                // so changing the comparison from == to === fixes the issue.
                return $d && $d->format($format) === $date;
        }
        if (validateDate($_POST['dob'], $format = 'Y-m-d') == false) {
                $message3 = "Date format must be yyyy-mm-dd.";
                $count -= 1;
        }

        //if no error
        if ($count == 4) {
                $sql = "Insert into User Values
                        (DEFAULT, :u, :p, DEFAULT, :f, :l, :e, :dob, :c, 0)";
                $stmt = $pdo->prepare($sql);   
                $stmt->bindParam(":u", $_POST['username']);     
                $stmt->bindParam(":p", $_POST['password']);
                $stmt->bindParam(":f", $_POST['firstname']);
                $stmt->bindParam(":l", $_POST['lastname']);
                $stmt->bindParam(":e", $_POST['email']);
                $stmt->bindParam(":dob", $_POST['dob']);
                $stmt->bindParam(":c", $_POST['country']);
                $stmt->execute(); 

                header("location: login.php");
        }       
}

$smarty->assign("usermessage", $usermessage);
$smarty->assign("message1", $message1);
$smarty->assign("message2", $message2);
$smarty->assign("message3", $message3);
$smarty->display("registration.tpl");