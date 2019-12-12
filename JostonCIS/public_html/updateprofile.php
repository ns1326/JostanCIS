<?php
    require_once "../private_html/config.inc.php";
    require_once PRIVATE_HTML . "dbconfig.inc.php";

$user = $_SESSION['user'];
$message1 = "";
$message2 = "";
$message3 = "";

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

    $count = 3;

    foreach ($profile as $profile_id) {        
        if (empty($_POST["username"])) {
            $username = $profile_id['username'];
        } else {
            //Username error checking
            $trimname = trim($_POST['username']);
            if ($trimname == ""){   // OR if (!preg_match("^[a-zA-Z0-9]*$",$trimname)) {
                    $message1 = "Username must have characters.";    
                    $count -= 1;
            } else {
                $username = $_POST["username"];
            }            
        }
        if (!empty($_POST["newpassword"])) {
            if (!empty($_POST["confirmpassword"])) {
                //Password error checking
                if ($_POST["newpassword"] != $_POST["confirmpassword"]) { //check whether they both are the same
                    $message2 = "Password is not the same."; 
                    $count -= 1;                
                } else {
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
                $dob = $_POST["dob"];
            }           
        }   

        if (empty($_POST["country"])) {
            $country = $profile_id['country'];
        } else {
            $country = $_POST["country"];
        }   
        
    }       

    //if no error or count == 3
    if ($count == 3) {
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
}

$smarty->assign("message1", $message1);
$smarty->assign("message2", $message2);
$smarty->assign("message3", $message3);
$smarty->assign("profile", $profile);
$smarty->display("updateprofile.tpl");