<?php
    require_once "../private_html/config.inc.php";
    require_once PRIVATE_HTML . "dbconfig.inc.php";

$user = $_SESSION['user'];
$message = "";
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

    foreach ($profile as $profile_id) {        
        if (empty($_POST["username"])) {
            $username = $profile_id['username'];
        } else {
            $username = $_POST["username"];
        }
        if (!empty($_POST["newpassword"])) {
            if (!empty($_POST["confirmpassword"])) {
                if ($_POST["newpassword"] == $_POST["confirmpassword"]) {
                    $password = $_POST["confirmpassword"];
                }     
            }                    
        } else {                
            $password = $profile_id['password'];
        }

        if (empty($_POST["firstname"])) {
            $firstname = $profile_id['firstname'];
        } else {
            $firstname = $_POST["firstname"];
        }

        if (empty($_POST["lastname"])) {
            $lastname = $profile_id['lastname'];
        } else {
            $lastname = $_POST["lastname"];
        }   

        if (empty($_POST["dob"])) {
            $dob = $profile_id['dob'];
        } else {
            $dob = $_POST["dob"];
        }   

        if (empty($_POST["country"])) {
            $country = $profile_id['country'];
        } else {
            $country = $_POST["country"];
        }   
        
    }       
    $sql = "Update User 
                set Username = :u,
                Password = :np,
                First_Name = :f,
                Last_Name = :l,
                Date_of_Birth = :dob,
                Country = :c
            WHERE User_ID = :user";
    $stmt = $pdo->prepare($sql);        
    $stmt->bindParam(":u", $username);  
    $stmt->bindParam(":np", $password);
    $stmt->bindParam(":f", $firstname);
    $stmt->bindParam(":l", $lastname);
    $stmt->bindParam(":dob", $dob);
    $stmt->bindParam(":c", $country);
    $stmt->bindParam(":user", $user); 
    $stmt->execute();   
    
    header("location: profile.php");
}

$smarty->assign("message", $message);
$smarty->assign("profile", $profile);
$smarty->display("updateprofile.tpl");