select * from playlist;
select * from song_in_playlist;
select * from song;

-- INSERT INTO song_in_playlist  values
--     (DEFAULT, 3, 9, DEFAULT);

select Album_Name, Artist_Name from album
	join user_album on Album_ID = Album_FK
	join User on User.User_ID = User_album.User_FK
	join user_artist on User.User_ID = User_artist.User_FK
	join artist on Artist_ID = Artist_FK;

