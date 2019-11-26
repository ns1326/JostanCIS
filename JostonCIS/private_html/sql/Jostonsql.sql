select User_ID, Artist_Name from Artist 
	join User_Artist ON Artist.Artist_ID = User_Artist.Artist_FK
    join User ON User.User_ID = User_Artist.User_FK;

-- for song.php
SELECT Song_ID, Song.Title, Album_Name, Artist_Name, Playlist_Name FROM Song	
	JOIN Album ON Album.Album_ID = Song.Album_FK
    JOIN Artist ON Artist.Artist_ID = Song.Artist_FK    
	JOIN Song_In_Playlist ON Song.Song_ID = Song_In_Playlist.Song_FK 
    JOIN Playlist ON Playlist.Playlist_ID = Song_In_Playlist.Playlist_FK
    JOIN User_Playlist ON Playlist.Playlist_ID = User_Playlist.Playlist_FK	
Order BY Song_ID;

Select * from User_Album;
Select * from User_Artist;
Select * from User;
select * from Song;

-- for album.php
SELECT Album_ID, Album_Name, Artist_Name FROM Album
	JOIN User_Album ON Album.Album_ID = User_Album.Album_FK
	JOIN User ON User.User_ID = User_Album.User_FK
	JOIN User_Artist ON User.User_ID = User_Artist.User_FK
	JOIN Artist ON Artist.Artist_ID = User_Artist.Artist_FK
Order By Album_ID;

-- for album.php (BETTER, although might not be accurate)
SELECT DISTINCT Album_Name, Artist_Name FROM Album
	JOIN Song ON Album.Album_ID = Song.Album_FK
	JOIN Artist ON Artist.Artist_ID = Song.Artist_FK
Order By Album_Name;

-- for playlist.php
SELECT Playlist_ID, Playlist_Name from Playlist;

Select * from User_Album;
Select * from User_Artist;
Select * from User;
select * from Song;

Select Username, Password, Salt, First_Name, Last_Name, Email, Date_of_Birth, Country from User Where User_ID = 2;

Update User 
	set Salt = "asdasd"
Where Email = "asd";

Delete from User where user_id = 4;
Insert into User Values (DEFAULT, "asd", "asd", DEFAULT, "asd", "asd", "asd", "1970-02-01", "asd", 1);
Select Username, Password, First_Name, Last_Name, Email, Gender From User;

SELECT Username as User, Password, First_Name as firstname, Last_Name as lastname, Email as email, Gender as gender 
	FROM User
WHERE Username = "jostonchan";

Update User 
	set Username = 'jostonchan',
    Password = 'jostonchan',
    First_Name = 'Joston',
    Last_Name = 'Chan',
    Gender = 'Male'
WHERE User_ID = 1; 














