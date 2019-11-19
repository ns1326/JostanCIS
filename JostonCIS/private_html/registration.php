<?php
require_once "config.inc.php";
require_once "dbconfig.inc.php";

$sql = "Insert into User Values
        (DEFAULT, :u, :p, DEFAULT, :f, :l, :e, :dob, :c, 1)";
$stmt = $pdo->prepare($sql);   
$stmt->bindParam(":u", $_POST['username']);     
$stmt->bindParam(":p", $_POST['password']);
$stmt->bindParam(":f", $_POST['firstname']);
$stmt->bindParam(":l", $_POST['lastname']);
$stmt->bindParam(":e", $_POST['email']);
$stmt->bindParam(":dob", $_POST['dob']);
$stmt->bindParam(":c", $_POST['country']);

$smarty->display("registration.tpl");
