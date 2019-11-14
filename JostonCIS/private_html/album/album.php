<?php
require_once "../config.inc.php";
require_once "../dbconfig.inc.php";

$sql = "SELECT DISTINCT Album_Name, Artist_Name FROM Album
            JOIN Song ON Album.Album_ID = Song.Album_FK
            JOIN Artist ON Artist.Artist_ID = Song.Artist_FK
        Order By Album_Name;";
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