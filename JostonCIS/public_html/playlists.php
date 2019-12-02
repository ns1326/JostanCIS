<?php
    require_once "../private_html/config.inc.php";
    require_once PRIVATE_HTML . "dbconfig.inc.php";

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

$smarty->assign("noplaylists", $noplaylists);
$smarty->assign("playlists", $playlists);
$smarty->display("playlists.tpl");