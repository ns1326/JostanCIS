<?php
require_once "../private_html/config.inc.php";
require_once PRIVATE_PATH . "dbconfig.inc.php";

$sql = "SELECT Song.Title as Title , Album_Name, Artist_Name, Playlist_Name FROM Song	
            JOIN song_in_playlist ON Song.Song_ID = song_in_playlist.Song_FK 
            JOIN playlist ON playlist.Playlist_ID = song_in_playlist.Playlist_FK
            JOIN user_playlist ON playlist.Playlist_ID = user_playlist.Playlist_FK
            JOIN user ON user.User_ID = user_playlist.User_FK
            JOIN user_album ON user.User_ID = user_album.User_FK
            JOIN album ON album.Album_ID = user_album.Album_FK
            JOIN user_artist ON User.User_ID = User_artist.User_FK
            JOIN artist ON artist.Artist_ID = user_artist.Artist_FK
        Order BY Song.Title;"
$stmt = $pdo->prepare($sql);
$stmt->execute();

$nosongs = false;
if($stmt->rowCount() == 0){
    $nosongs = true;
} else {
    $songs = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $songs[] = array(
            "Title" => $row['Title'],
            "Album_Name" => $row['Album_Name'],
            "Artist_Name" => $row['Artist_Name'],
            "Playlist_Name" => $row['Playlist_Name']
        );
    }
}

$smarty->assign("nosongs", $nosongs);
$smarty->assign("songs", $songs);
$smarty->display("songs.tpl");