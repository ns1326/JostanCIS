<?php
    require_once "config.inc.php";
    require_once "dbconfig.inc.php";

$_SESSION["passwordStored"] = "hello";
// define variables and initialize with empty values
$username = $password = "";
$message = "error";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        header("Location: loginerror.html");
        exit();
    } else {
        $username = $_POST["username"];
    }
    if (empty($_POST["password"])) {
        header("Location: loginerror.html");
        exit();
    } else {
        $password = $_POST["password"];
        $passwordStored = hash('sha256', $password, FALSE);
    }
    $message = $username . " " . $passwordStored;
}
?>

<html lang="en">
<body>

<a> Username Field Input : <?php echo $username; ?> </a> <br>
<a> Password Field Input : <?php echo $password; ?> </a> <br>
<a> Password Stored : <?php echo $passwordStored; ?> </a> <br>
<a> Data sent to database : <?php echo $message;
     ?></a> <br>

<p>This page is to show what the user typed in and what is sent to the database</p>
<p>You will be redirected in 5 seconds</p>
<script>
    var timer = setTimeout(function () {
        window.location = 'profile.html'
    }, 5000);
</script>
</body>
</html>