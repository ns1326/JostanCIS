select * from User;
select * from Song_In_Playlist;
select * from Song;
select * from Artist;
select * from User_Artist;

-- Create User
Insert into User values
	(1, "jostonchan", DEFAULT, "Joston", "Chan", "jc1608@messiah.edu", 1);
    
Insert into User_Artist values
	(1, 1, DEFAULT), (1, 2, DEFAULT);

select Artist_Name from Artist 
	join User_Artist ON Artist.Artist_ID = User_Artist.Artist_FK
    join User ON User.User_ID = User_Artist.User_FK;

SELECT Song.Title, Album_Name, Artist_Name, Playlist_Name FROM Song	
	JOIN Song_In_Playlist ON Song.Song_ID = Song_In_Playlist.Song_FK 
    JOIN Playlist ON Playlist.Playlist_ID = Song_In_Playlist.Playlist_FK
    JOIN User_Playlist ON Playlist.Playlist_ID = User_Playlist.Playlist_FK
    JOIN User ON User.User_ID = User_Playlist.User_FK
    JOIN User_Album ON User.User_ID = User_Album.User_FK
    JOIN Album ON Album.Album_ID = User_Album.Album_FK
	JOIN User_Artist ON User.User_ID = User_Artist.User_FK
	JOIN Artist ON Artist.Artist_ID = User_Artist.Artist_FK
Order BY Song.Title;

