<?php
    require_once "../../private_html/config.inc.php";
    require_once PRIVATE_HTML . "dbconfig.inc.php";

$sql = "SELECT DISTINCT Album_ID, Album_Name, Artist_Name FROM Album
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
            "Album_ID" => $row['Album_ID'],
            "Album_Name" => $row['Album_Name'],
            "Artist_Name" => $row['Artist_Name']
        );
    }
}

$smarty->assign("nosongs", $noalbums);
$smarty->assign("albums", $albums);
$smarty->display("album/album.tpl");