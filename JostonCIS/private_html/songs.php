<?php
require_once "config.inc.php";
require_once "dbconfig.inc.php";

$sql = "SELECT Song.Title as Title , Album_Name, Artist_Name, Playlist_Name FROM Song	           
            JOIN Song_In_Playlist ON Song.Song_ID = Song_In_Playlist.Song_FK 
            JOIN Playlist ON Playlist.Playlist_ID = Song_In_Playlist.Playlist_FK
            JOIN User_Playlist ON Playlist.Playlist_ID = User_Playlist.Playlist_FK
            JOIN User ON User.User_ID = User_Playlist.User_FK
            JOIN User_Album ON User.User_ID = User_Album.User_FK
            JOIN Album ON Album.Album_ID = User_Album.Album_FK
            JOIN User_Artist ON User.User_ID = User_Artist.User_FK
            JOIN Artist ON Artist.Artist_ID = User_Artist.Artist_FK
        Order BY Song.Title";
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