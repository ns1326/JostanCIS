<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Albums</title>
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
                <div class="row ml-3 font-weight-bolder mt-4 primarycategory">
                    <p><a class="link-unstyled" href="album.php">My Albums</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="../artists.php">My Artists</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
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
                    <h1>My Albums</h1>
                </div>
                <br>
                {if $noalbums}
                    <div class="col-8 bg-light nospacing ml-3">
                        There are no albums.
                    </div>
                {else}
                    <form action="addalbum.php" method="get" id="album">
                        <fieldset>
                            <!-- Album Name-->
                            {foreach $albums as $albums_id}                             
                                <div class="form-group">
                                    <label class="col-md-8 control-label" for="{$albums_id.Album_Name}}">
                                    <a class="album-link-unstyled" href="../viewalbum.php?id={$albums_id.Album_ID}">{$albums_id.Album_Name}</a></label>
                                    <div class="col-md-8">
                                        <p><b><a class="album-link-unstyled" 
                                        href="../artist/EdSheeran.php">{$albums_id.Artist_Name}</a></b></p>
                                    </div>
                                </div>
                                <hr>
                            {/foreach}
                        </fieldset>
                    </form>
                {/if}
                <div class="row ml-3 mb-3">
                    <button type="add" form="album" value="add">Add</button>
                </div>
                <form method="get" action="delete_album.php">
                    <div class="ml-3">
                        <button type="submit">Delete Album</button>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>