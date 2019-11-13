--
-- teamjoston.db
--
INSERT INTO Genre (Genre_Name) VALUES ("Folk Rock");
SET @genre = last_insert_id();

INSERT INTO Artist (Artist_Name) VALUES ("Jim Croche");
SET @artist = last_insert_id();

INSERT INTO Album (Album_Name, Genre_FK)  VALUES ("You Don't Mess Around with Jim", @genre);
SET @album = last_insert_id();

INSERT INTO Song (Title, Artist_FK, Album_FK) values
    ("Operator", @artist, @album),
    ("Partie Time", @artist, @album),
    ("You Don't Mess Around With Jim", @artist, @album),
    ("Photographs and Memories", @artist, @album);
    
INSERT INTO Genre (Genre_Name) VALUES ("Rock and Roll");
SET @genre = last_insert_id();
-- SET @genre = 5;
INSERT INTO Artist (Artist_Name) VALUES ("Boston");
SET @artist = last_insert_id();

INSERT INTO Album (Album_Name, Genre_FK)  VALUES ("Boston", @genre);
SET @album = last_insert_id();

INSERT INTO Song (Title, Artist_FK, Album_FK) values
    ("More Than a Feeling", @artist, @album),
    ("Peace of Mind", @artist, @album),
    ("Rock & Roll Band", @artist, @album),
    ("Smokin", @artist, @album),
    ("Beautiful People", @artist, @album);

-- Create User
Insert into User values
	(1, "jostonchan", DEFAULT, "Joston", "Chan", "jc1608@messiah.edu", 1);
    
-- Create album to user link
Insert into User_Album values
	(1, 1, DEFAULT), (1, 2, DEFAULT);

-- Create artist to user link
Insert into User_Artist values
	(1, 1, DEFAULT), (1, 2, DEFAULT);
    
-- Create song to user link
Insert into User_Song values
	(1, 1, DEFAULT), (1, 2, DEFAULT), (1, 3, DEFAULT), 
    (1, 4, DEFAULT), (1, 5, DEFAULT), (1, 6, DEFAULT), 
    (1, 7, DEFAULT), (1, 8, DEFAULT), (1, 9, DEFAULT);
    
-- Create Playlist
Insert into Playlist values
	(1, "Worship", DEFAULT), (2, "Pop", DEFAULT), (3, "Chill", DEFAULT);
    
-- Create playlist to user link
Insert into User_Playlist values
	(1, 1), (1, 2), (1, 3);

-- Create playlist to song link
Insert into Song_In_Playlist values
	(1, 1, 1, 1), (2, 1, 2, DEFAULT), (3, 1, 3, DEFAULT),
    (4, 2, 4, DEFAULT), (5, 2, 5, DEFAULT), (6, 2, 6, DEFAULT),
    (7, 3, 7, DEFAULT), (8, 3, 8, DEFAULT), (9, 3, 9, DEFAULT);
