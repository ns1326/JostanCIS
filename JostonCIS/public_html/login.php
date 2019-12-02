<?php
    require_once "../private_html/config.inc.php";
    require_once PRIVATE_HTML . "dbconfig.inc.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "Select User_ID as userID, Username, Password from User";
    $stmt = $pdo->prepare($sql);        
    $stmt->execute();    

    if($stmt->rowCount() > 0){
        $check = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $check[] = array(
                "userID" => $row['userID'],
                "user" => $row['Username'],
                "password" => $row['Password'],
            );
        }
    }

    foreach ($check as $check_id) {
        if ($_POST['username'] == $check_id['user'] && $_POST['password'] == $check_id['password']) {              
            $user = $check_id['userID'];
            $_SESSION['user'] = $user;
            header("location: profile.php");                                      
        } else {
            $message = "**Incorrect Username and Password Combination**";
        }
    } 
}

$smarty->assign("message", $message);
$smarty->display("login.tpl");

    