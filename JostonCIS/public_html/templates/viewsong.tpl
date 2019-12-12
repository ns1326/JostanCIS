<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Overview</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

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
                    <img src="images/placeholder-face-big.png"
                         class="rounded mx-auto d-block mt-3 mr-3 ml-3 mb-3 img-fluid"
                         alt="Profile Image Holder">
                    <p class="col-12 font-weight-bolder center">{$username}</p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="profile.php">Account Overview</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="album/album.php">My Albums</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="artists.php">My Artists</a></p>
                </div>
                <hr>
                <div class="row ml-3 font-weight-bolder mt-4 primarycategory">
                    <p><a class="link-unstyled" href="songs.php">My Songs</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="playlists.php">My Playlists</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="login.php">Log Out</a></p>
                </div>
                <hr>
            </div>
            <div class="col-8 bg-light nospacing">
                <!--Table-->
                {if $nosongs}
                <div class="col-8 bg-light nospacing ml-3">
                    There are no songs.
                </div>
                {else}
                <div class="col-8 bg-light">
                    <div class="row mt-4 ml-3">
                        <h1>{$song.Title}</h1>
                    </div>
                </div>
                <form action="updatetitle.php" method="get" id="BeautifulPeople">
                    <fieldset>

                        <!-- Performed By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="performed">Artist</label>
                            {if empty({$song.Artist_Name})}
                            <div class="col-md-11">
                                <p>Artist not known</p>
                            </div>
                            {else}
                            <div class="col-md-11">
                                <p>{$song.Artist_Name}</p>
                            </div>
                        </div>
                        {/if}
                        <hr>
                        <!-- Written By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="written">Written By</label>
                            {if empty({$song.Written_by})}
                            <div class="col-md-11">
                                <p>Writer not known</p>
                            </div>
                            {else}

                            <div class="col-md-11">
                                <p>{$song.Written_by}</p>
                            </div>
                        </div>
                        {/if}
                        <hr
                        <!-- Produced By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="produced">Produced By</label>
                            {if empty({$song.Produced_by})}
                            <div class="col-md-11">
                                <p>Producer not known</p>
                            </div>
                            {else}

                            <div class="col-md-11">
                                <p>{$song.Produced_by}</p>
                            </div>
                        </div>
                        {/if}
                        <hr>
                        <!-- Added By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="added">Added By</label>
                            {if empty({$song.Added_by})}
                            <div class="col-md-11">
                                <p>Original Song</p>
                            </div>
                            {else}

                            <div class="col-md-11">
                                <p>{$song.Added_by}</p>
                            </div>
                        </div>
                        {/if}
                        <hr>
                        <!-- Added By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="added">Playlists</label>
                            {if empty({$song.Playlist_Name})}
                            <div class="col-md-11">
                                <p>Not in a Playlist</p>
                            </div>
                            {else}

                            <div class="col-md-11">
                                <p>{$song.Playlist_Name}</p>
                            </div>
                        </div>
                        {/if}
            </div>
            <hr>
            <!-- Text Review-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="dob">Review</label>
                {if empty({$song.Reviews})}
                <div class="col-md-11">
                    <p>No Written Reviews</p>
                </div>
                {else}

                <div class="col-md-11">
                    <p>{$song.Reviews}</p>
                </div>
            </div>
            {/if}
        </div>
        <hr>
        </fieldset>
        </form>
    </div>

    {/if}
</div>
</div>
</div>
</body>
</html>