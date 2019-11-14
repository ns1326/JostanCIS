select User_ID, Artist_Name from Artist 
	join User_Artist ON Artist.Artist_ID = User_Artist.Artist_FK
    join User ON User.User_ID = User_Artist.User_FK;

-- for song.php
SELECT Song.Title, Album_Name, Artist_Name, Playlist_Name FROM Song	
	JOIN Album ON Album.Album_ID = Song.Album_FK
    JOIN Artist ON Artist.Artist_ID = Song.Artist_FK    
	JOIN Song_In_Playlist ON Song.Song_ID = Song_In_Playlist.Song_FK 
    JOIN Playlist ON Playlist.Playlist_ID = Song_In_Playlist.Playlist_FK
    JOIN User_Playlist ON Playlist.Playlist_ID = User_Playlist.Playlist_FK	
Order BY Song.Title;

select * from Album;
select * from User_Album;
select * from User_Artist;
select * from Artist;

-- for album.php
SELECT Album_Name, Artist_Name FROM Album
	JOIN User_Album ON Album.Album_ID = User_Album.Album_FK
	JOIN User ON User.User_ID = User_Album.User_FK
	JOIN User_Artist ON User.User_ID = User_Artist.User_FK
	JOIN Artist ON Artist.Artist_ID = User_Artist.Artist_FK
Order By Album_Name;
	








