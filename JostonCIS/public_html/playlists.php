<?php
    require_once "../private_html/config.inc.php";
    require_once PRIVATE_HTML . "dbconfig.inc.php";

//Get username
$user = $_SESSION['user'];

$sql = "Select * FROM User where User_ID = :u";
$stmt = $pdo->prepare($sql);        
$stmt->bindParam(":u", $user);  
$stmt->execute();    

if($stmt->rowCount() == 1){
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $username= $row['Username'];                          
    }
} 

$sql = "SELECT Playlist_ID, Playlist_Name from Playlist";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$noplaylists = false;
if($stmt->rowCount() == 0){
    $noplaylists = true;
} else {
    $playlists = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $playlists[] = array(
            "Playlist_ID" => $row['Playlist_ID'],
            "Playlist_Name" => $row['Playlist_Name']
        );
    }
}

$smarty->assign("username", $username);
$smarty->assign("noplaylists", $noplaylists);
$smarty->assign("playlists", $playlists);
$smarty->display("playlists.tpl");