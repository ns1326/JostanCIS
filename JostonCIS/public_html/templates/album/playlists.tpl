<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Albums</title>
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
                    <p class="col-12 font-weight-bolder center">Username</p>
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
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="songs.php">My Songs</a></p>
                </div>
                <hr>
                <div class="row ml-3 font-weight-bolder mt-4 primarycategory">
                    <p><a class="link-unstyled" href="playlists.php">My Playlists</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="login.php">Log Out</a></p>
                </div>
                <hr>
            </div>
            <div class="col-8 bg-light">
                <div class="row mt-4 ml-3">
                    <h1>Playlists</h1>
                </div>
                {if $noplaylists}
                    <div class="col-8 bg-light nospacing ml-3">
                        There are no playlists.
                    </div>
                {else}
                    {foreach $playlists as $playlists_id}
                        <form action="PlaylistView/CreatePlaylist.php" method="get" id="createplaylist">
                            <div class="row mt-4 ml-3">
                                <h2><a class="album-link-unstyled" 
                                href="PlaylistView/PlaylistView.php">{$playlists_id.Playlist_Name}</a></h2>
                            </div>
                            <hr>
                        </form>
                    {/foreach}
                {/if}
                <div class="row ml-2 mb-3">
                    <button type="create" form="createplaylist" value="create">Create New</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>