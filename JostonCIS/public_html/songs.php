<?php
    require_once "../private_html/config.inc.php";
    require_once PRIVATE_HTML . "dbconfig.inc.php";

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

$sql = "SELECT Song_ID as SongID, Song.Title as Title , Album_Name, Artist_Name, Playlist_Name FROM Song	           
            JOIN Album ON Album.Album_ID = Song.Album_FK
            JOIN Artist ON Artist.Artist_ID = Song.Artist_FK    
            JOIN Song_In_Playlist ON Song.Song_ID = Song_In_Playlist.Song_FK 
            JOIN Playlist ON Playlist.Playlist_ID = Song_In_Playlist.Playlist_FK
            JOIN User_Playlist ON Playlist.Playlist_ID = User_Playlist.Playlist_FK	
        Order BY Song_ID";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$nosongs = false;
if($stmt->rowCount() == 0){
    $nosongs = true;
} else {
    $songs = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $songs[] = array(
            "SongID" => $row['SongID'],
            "Title" => $row['Title'],
            "Album_Name" => $row['Album_Name'],
            "Artist_Name" => $row['Artist_Name'],
            "Playlist_Name" => $row['Playlist_Name']
        );
    }
}

$smarty->assign("username", $username);
$smarty->assign("nosongs", $nosongs);
$smarty->assign("songs", $songs);
$smarty->display("songs.tpl");