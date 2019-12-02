<?php
    require_once "../private_html/config.inc.php";
    require_once PRIVATE_HTML . "dbconfig.inc.php";

$user = $_SESSION['user'];

$sql = "Select Username, Password, First_Name, Last_Name, Email, Date_of_Birth, Country 
        FROM User 
        Where User_ID = :u";

$stmt = $pdo->prepare($sql);        
$stmt->bindParam(":u", $user);     
$stmt->execute();    

if($stmt->rowCount() > 0){
    $profile = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $profile[] = array(
            "username" => $row['Username'],
            "password" => $row['Password'],
            "firstname" => $row['First_Name'],
            "lastname" => $row['Last_Name'],
            "email" => $row['Email'],
            "dob" => $row['Date_of_Birth'],
            "country" => $row['Country'],
        );
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['edit'])){
        header("location: updateprofile.php");
    }    

    if (isset($_POST['delete'])){
        $sql = "Delete from User Where User_ID = :u";

        $stmt = $pdo->prepare($sql);        
        $stmt->bindParam(":u", $user);     
        $stmt->execute(); 

        header("location: login.php");
    }  
}

$smarty->assign("profile", $profile);
$smarty->display("profile.tpl");
        