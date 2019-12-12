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
            <div class="col-8 bg-light  nospacing">
                <div class="row mt-4 ml-3">
                    <h1>No.6 Collaboration Project</h1>
                </div>
                <!--REMEMBER TO MAKE THE HTML BELOW TO PHP-->
                <!--Table-->        
                <form action="deletesongsfromalbum.php" method="POST" id="deletesongsfromalbum">     
                <!-- <form action="addsongsforalbum.php" method="POST" id="viewalbum"> -->
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Album</th>
                                <th scope="col">Artist</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><a class="songs-link-unstyled" href="../title/BeautifulPeople.php">Beautiful People (feat. Khalid)</a></td>
                                <td><a class="songs-link-unstyled" href="../../viewalbum.php">No.6 Collaboration Project</a></td>
                                <td><a class="songs-link-unstyled" href="../artist/EdSheeran.php">Ed Sheeran</a></td>
                            </tr>
                            {foreach $song as $song_ID}
                                <div class="form-group">
                                    <label class="col-md-8 control-label" for="{$albums_id.Album_Name}}">
                                        <a class="album-link-unstyled" href="../../viewalbum.php?id={$albums_id.Album_ID}">{$albums_id.Album_Name}</a></label>
                                    <div class="col-md-8">
                                        <p><b><a class="album-link-unstyled"
                                                 href="../artist/EdSheeran.php">{$albums_id.Artist_Name}</a></b></p>
                                    </div>
                                </div>
                                <hr>
                            {/foreach}
                        </tbody>
                    </table>
                </form>
                <div class="row ml-3 mb-3">
                    <div class="mb-3">
                        <button type="add" form="viewalbum" name="add">Add Songs</button>
                    </div>
                    <div class="ml-3 mb-3">
                        <button type="edit" form="deletesongsfromalbum" name="edit">Edit</button>
                    </div>
                </div>                            
            </div>
        </div>
    </div>
</body>
</html>