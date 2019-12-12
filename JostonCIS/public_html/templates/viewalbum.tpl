<!DOCTYPE
        html>
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
                <div class="row mt-4 ml-3">
                    {foreach $songs as $songs_id}
                        {if $songs_id.Album_ID == $key}
                            <h1>{$songs_id.Album_Name}</h1>
                </div>
                            <div>
                            <p>Created by {$songs[$key].Added_by}</p>
                            </div>
                            {break}
                            {else}
                        {/if}
                    {/foreach}
                <!--Table-->
                {if $nosongs}
                    <div class="col-8 bg-light nospacing ml-3">
                        There are no songs.
                    </div>
                {else}
                    <!-- <form action="songs/deletesongsfromsongs.php" method="get" id="deletesongs"> -->
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Artist</th>
                            </tr>
                        <tbody>
                        {foreach $songs as $songs_id}

                            {if $songs_id.Album_ID == $key}
                                <tr>
                                    {if $key == 2}
                                        <th scope="row">{$songs_id.SongID - 4} </th>
                                    {else}
                                        <th scope="row">{$songs_id.SongID} </th>
                                    {/if}
                                    <td><a class="songs-link-unstyled" href="viewsong.php?id={$songs_id.SongID - 1}">{$songs_id.Title}</a></td>
                                    <td><a class="songs-link-unstyled" href="artist/EdSheeran.php">{$songs_id.Artist_Name}</a></td>
                                </tr>
                            {/if}
                        {/foreach}
                        </tbody>
                    </table>
                {/if}
                <hr>
            </div>
        </div>
    </div>
</body>
</html>