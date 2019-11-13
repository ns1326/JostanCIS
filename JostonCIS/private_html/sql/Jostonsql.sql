select * from album;
select * from user;
select * from song;
select * from artist;
select * from playlist;
select * from user_playlist;
select * from media_type;

select Album_Name, Artist_Name from album
	join user_album on Album_ID = Album_FK
	join User on User_ID = User_FK
	join user_artist on User_ID = User_FK
	join artist on Artist_ID = Artist_FK 

