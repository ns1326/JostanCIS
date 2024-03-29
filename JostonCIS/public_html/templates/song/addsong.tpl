<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Overview</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">

</head>
<body class="bg-primary">

<div class="container">
    <div class="col">
        <div class="row align-center">
            <img src="https://via.placeholder.com/2000x150?text=Hello+Music+Now" class="img-fluid">
        </div>
        <div class="row">
            <div class="col-4 bg-secondary text-white">
                <div class="row">
                    <img src="../images/placeholder-face-big.png"
                        class="rounded mx-auto d-block mt-3 mr-3 ml-3 mb-3 img-fluid"
                        alt="Profile Image Holder">
                    <p class="col-12 font-weight-bolder center">Username</p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="../profile.php">Account Overview</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="../album/album.php">My Albums</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="../artists.php">My Artists</a></p>
                </div>
                <hr>
                <div class="row ml-3 font-weight-bolder mt-4 primarycategory">
                    <p><a class="link-unstyled" href="../songs.php">My Songs</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="../playlists.php">My Playlists</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="../login.php">Log Out</a></p>
                </div>
                <hr>
            </div>
            <div class="col-8 bg-light">
                <div class="row mt-4 ml-3">
                    <h1>Add song</h1>
                </div>
                <form action="../songs.php" method="get" id="addsong">
                    <fieldset>
                        <!-- Title -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="title">Title</label>
                            <div class="col-md-10">
                                <input id="title" name="title" type="text" placeholder="Title of the Song"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- Album -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="album">Album</label>
                            <div class="col-md-10">
                                <input id="album" name="album" type="text" placeholder="Album of the song"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- Artist -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="artist">Artist</label>
                            <div class="col-md-10">
                                <input id="artist" name="artist" type="text" placeholder="Artist"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- Performed By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="performed">Performed By</label>
                            <div class="col-md-10">
                                <input id="performed" name="performed" type="text" placeholder="Ed Sheeran"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- Written By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="written">Written By</label>
                            <div class="col-md-10">
                                <input id="written" name="written" type="text" placeholder="Ed Sheeran"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- Produced By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="produced">Produced By</label>
                            <div class="col-md-10">
                                <input id="produced" name="produced" type="text" placeholder="Ed Sheeran"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- Added By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="added">Recently Added By</label>
                            <div class="col-md-10">
                                <input id="added" name="added" type="text" placeholder="User at mm/dd/year"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <hr>                        
                        <!-- Text Review-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="dob">Write a Review</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="review" rows="4" placeholder="Type positive thoughts dudes."></textarea>
                            </div>  
                        </div>
                        <hr>
                        <!-- Font Awesome Icon Library -->
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                        <style>
                            .checked {
                                color: orange;
                            }
                        </style>
                        </head>

                        <h2>Star Rating</h2>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </fieldset>
                    <hr>
                </form>
                <div class="row ml-3 mb-3">
                    <button type="addsong" form="addsong" value="addsong">Add</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>