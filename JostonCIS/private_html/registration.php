<?php
require_once "config.inc.php";
require_once "dbconfig.inc.php";

$message1 = "";
$message2 = "";
$message3 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // if (preg_match("^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a
        //                 -zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z
        //                 0-9-]{0,61}[a-zA-Z0-9])?)*$", $_POST['email'])) {
                if ( $_POST['password'] ==  $_POST['confirmpassword']) { //check whether they both are the same
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
                $message1 = "Password is not the same";   
        // }        
        // $message2 = "Your email must consists of @ and .com, .edu and etc";
        // $message3 = "Date format must must yyyy-mm-dd";
}

$smarty->assign("message1", $message1);
$smarty->assign("message2", $message2);
$smarty->assign("message3", $message3);
$smarty->display("registration.tpl");