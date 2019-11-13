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
                    <p class="col-12 font-weight-bolder center">Username</p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="profile.html">Account Overview</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="album/album.html">My Albums</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="artists.html">My Artists</a></p>
                </div>
                <hr>
                <div class="row ml-3 font-weight-bolder mt-4 primarycategory">
                    <p><a class="link-unstyled" href="songs.php">My Songs</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="playlists.html">My Playlists</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="login.html">Log Out</a></p>
                </div>
                <hr>
            </div>
            <div class="col-8 bg-light nospacing">
                <div class="row mt-4 ml-3">
                    <h1>My Songs</h1>
                </div>
                <!--Table-->
                {if $nosongs}
                    <div class="col-8 bg-light nospacing">
                        There are no songs available.
                    </div>
                {else}
                    <form action="{$WEB_URL}songs/deletesongsfromsongs.html" method="get" id="deletesongs">
                        <!-- <form action="songs/addsong.html" method="get" id="songs"> -->
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Album</th>
                                <th scope="col">Artist</th>
                                <th scope="col">Add to Playlist</th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach $song as $songs_id}
                                $i = 1
                                    <tr>
                                        <th scope="row">$i</th>
                                        <td><a class="songs-link-unstyled" href="title/BeautifulPeople.html">{$songs_id.Title}</a></td>
                                        <td><a class="songs-link-unstyled" href="album/viewalbum.html">{$songs_id.Album_Name}</a></td>
                                        <td><a class="songs-link-unstyled" href="artist/EdSheeran.html">{$songs_id.Artist_Name}</a></td>
                                        <td>
                                            <select name="Add to Playlist" style="width: 100px">
                                                <option value="default">Add to Playlist</option>
                                                {if $songs_id.Playlist_Name === false}
                                                    <option value="none">No Playlist</option>
                                                {else}
                                                    {foreach $song_id.Playlist_Name as $playlist_name}                                                    
                                                        <option value="{$playlist_name}">{$playlist_name}}</option>
                                                    {/foreach}
                                                {/if}
                                            </select>
                                        </td>
                                    </tr>     
                                $i += 1  
                            {/foreach}                 
                            </tbody>
                        </table>
                    </form>
                {/if}
                <div class="row ml-3 mb-3">
                    <div class="mb-3">
                        <button type="add" form="songs" value="add">Add Songs</button>
                    </div>
                    <div class="ml-3 mb-3">
                        <button type="edit" form="deletesongs" value="edit">Edit</button>
                    </div>
                    <div class="ml-3 mb-3">
                    <form method="get" action="songs.php">
                        <button type="submit">Update Playlists</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>