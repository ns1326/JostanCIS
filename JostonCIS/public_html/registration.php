<?php
        require_once "../private_html/config.inc.php";
        require_once PRIVATE_HTML . "dbconfig.inc.php";

$usermessage = $message1 = $message2 = $message3 = "";
$firstname = $lastname = $username = $password = $confirmpassword = 
$email = $dob = $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $count = 4;

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $country = $_POST['country'];

        //Username error checking
        $trimname = trim($_POST['username']);
        if ($trimname == ""){   // OR if (!preg_match("^[a-zA-Z0-9]*$",$trimname)) {
                $usermessage = "Username must have characters.";    
                $count -= 1;
        } else {
                $username = $_POST['username'];
        }

        //Password error checking
        if ( $_POST['password'] !=  $_POST['confirmpassword']) { //check whether they both are the same
                $message1 = "Password is not the same."; 
                $count -= 1;
        }  else {
                $password = $_POST['password'];
                $confirmpassword = $_POST['confirmpassword'];
        }

        //Email error checking
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $message2 = "Your email must consists of @ and .com, .edu and etc.";
                $count -= 1;
        } else {
                $email = $_POST['email'];
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
        } else {
                $dob = $_POST['dob'];
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

//Display error messages
$smarty->assign("usermessage", $usermessage);
$smarty->assign("message1", $message1);
$smarty->assign("message2", $message2);
$smarty->assign("message3", $message3);

//Populate input box if entered by User
$smarty->assign("firstname", $firstname);
$smarty->assign("lastname", $lastname);
$smarty->assign("username", $username);
$smarty->assign("password", $password);
$smarty->assign("confirmpassword", $confirmpassword);
$smarty->assign("email", $email);
$smarty->assign("dob", $dob);
$smarty->assign("country", $country);

$smarty->display("registration.tpl");