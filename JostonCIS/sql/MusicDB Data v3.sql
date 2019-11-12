--
-- Music DB Data v3
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
    ("Smokin", @artist, @album);

