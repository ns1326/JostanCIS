<?php
require_once "../config.inc.php";
require_once "../dbconfig.inc.php";

$sql = "SELECT Album_Name, Artist_Name FROM Album
            JOIN User_Album ON Album.Album_ID = User_Album.Album_FK
            JOIN User ON User.User_ID = User_Album.User_FK
            JOIN User_Artist ON User.User_ID = User_Artist.User_FK
            JOIN Artist ON Artist.Artist_ID = User_Artist.Artist_FK
        Order By Album_Name";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$noalbums = false;
if($stmt->rowCount() == 0){
    $noalbums = true;
} else {
    $songs = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $albums[] = array(
            "Album_Name" => $row['Album_Name'],
            "Artist_Name" => $row['Artist_Name']
        );
    }
}

$smarty->assign("nosongs", $noalbums);
$smarty->assign("albums", $albums);
$smarty->display("album.tpl");