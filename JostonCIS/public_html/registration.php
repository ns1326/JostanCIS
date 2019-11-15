<?php
    require_once "config.inc.php";
    require_once "dbconfig.inc.php";
    
// define variables and initialize with empty values
$firstname = $lastname = $username = $passwordStored = $password = $country = $dob = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Check firstname field
    if (empty($_POST["firstname"])) {
        header("Location: registrationerror.html");
        exit();
    } else {
        $firstname = $_POST["firstname"];
    }

// Check lastname field
    if (empty($_POST["lastname"])) {
        header("Location: registrationerror.html");
        exit();
    } else {
        $lastname = $_POST["lastname"];
    }

// Check username field and/or create username
    if (empty($_POST["username"])) {
        $username = $firstname . $lastname . time();
    } else {
        $username = $_POST["username"];
    }

// Check password field
    if (empty($_POST["password"])) {
        $password = rand(1000, 9999);
        $passwordStored = hash('sha256', $password, FALSE);
    } else {
        $password = $_POST["password"];
        $passwordStored = hash('sha256', $password, FALSE);
    }

// Check dob field
    if (empty($_POST["dob"])) {
        header("Location: registrationerror.html");
        exit();
    } else {
        $dob = $_POST["dob"];
    }

// Check country field
    if (empty($_POST["country"])) {
        header("Location: registrationerror.html");
        exit();
    } else {
        $country = $_POST["country"];
    }
}
?>

<html lang="en">
<body>

<a> Firstname sent to Database : <?php echo $firstname; ?> </a> <br>
<a> Lastname sent to Database : <?php echo $lastname; ?> </a> <br>
<a> Username sent to Database : <?php echo $username; ?> </a> <br>
<a> DOB sent to Database : <?php echo $dob; ?> </a> <br>
<a> Country sent to Database : <?php echo $country; ?> </a> <br>
<a> Password Field Input : <?php echo $password; ?> </a> <br>
<a> Password sent to Database : <?php echo $passwordStored;
     ?></a>

<p>This page is to show what the user typed in and what is sent to the database</p>
<p>You will be redirected in 5 seconds</p>

<script>
    let timer = setTimeout(function () {
        window.location = 'profile.html'
    }, 5000);
</script>

</body>
</html>