select * from playlist;
select * from song_in_playlist;
select * from song;
select * from album;

INSERT INTO song_in_playlist  values
    (Default, 1, 1, 1),
    (Default, 1, 2, 2),
    (Default, 1, 3, 3);
    

SELECT Song.Title , Album_Name, Artist_Name, Playlist_Name FROM Song	
	JOIN song_in_playlist ON Song.Song_ID = song_in_playlist.Song_FK 
    JOIN playlist ON playlist.Playlist_ID = song_in_playlist.Playlist_FK
    JOIN user_playlist ON playlist.Playlist_ID = user_playlist.Playlist_FK
    JOIN user ON user.User_ID = user_playlist.User_FK
    JOIN user_album ON user.User_ID = user_album.User_FK
    JOIN album ON album.Album_ID = user_album.Album_FK
	JOIN user_artist ON User.User_ID = User_artist.User_FK
	JOIN artist ON artist.Artist_ID = user_artist.Artist_FK
Order BY Song.Title;

