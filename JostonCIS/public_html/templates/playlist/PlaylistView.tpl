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
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="../album/album.php">My Albums</a></p>
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
                <div class="row ml-3 font-weight-bolder mt-4 primarycategory">
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
                    <h1>Playlists</h1>
                </div>
                <div class="row mt-4 ml-3">
                 <h2>BANGERS!</h2>
                        <style type="text/css">
                            #tfheader{
                                background-color:#c3dfef;
                            }
                            #tfnewsearch{
                                float:right;
                                padding:20px;
                            }
                            .tftextinput{
                                margin: 0;
                                padding: 5px 15px;
                                font-family: Arial, Helvetica, sans-serif;
                                font-size:14px;
                                border:1px solid black; border-right:0px;
                                border-top-left-radius: 5px 5px;
                                border-bottom-left-radius: 5px 5px;
                            }
                            .tfbutton {
                                margin: 0;
                                padding: 5px 15px;
                                font-family: Arial, Helvetica, sans-serif;
                                font-size:14px;
                                text-align: center;
                                text-decoration: none;
                                color: #ffffff;
                                border: solid 1px #0076a3; border-right:0px;
                                background: black;
                                background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
                                background: -moz-linear-gradient(top,  #00adee,  #0078a5);
                                border-top-right-radius: 5px 5px;
                                border-bottom-right-radius: 5px 5px;
                            }
                            .tfbutton:hover {
                                text-decoration: none;
                                background:  black;
                                background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
                                background: -moz-linear-gradient(top,  #0095cc,  #00678e);
                            }
                            /* Fixes submit button height problem in Firefox */
                            .tfbutton::-moz-focus-inner {
                                border: 0;
                            }
                            .tfclear{
                                clear:both;
                            }
                        </style>
                    </head>
                    <body>
                    <div id="tfheader">
                        <form id="tfnewsearch" method="get" action="http://www.google.com">
                            <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
                        </form>
                        <div class="tfclear"></div>
                    </div>


                </div>
                <div class="row">
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
                            <td><a class="songs-link-unstyled" href="../title/BeautifulPeople.php">Beautiful People
                                (feat. Khalid)</a></td>
                            <td><a class="songs-link-unstyled" href="../album/viewalbum.php">No.6 Collaboration
                                Project</a></td>
                            <td><a class="songs-link-unstyled" href="../artist/EdSheeran.php">Ed Sheeran</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><a class="songs-link-unstyled" href="../title/IDon'tCare.php">I Don't Care (with Justin
                                Bieber)</a></td>
                            <td><a class="songs-link-unstyled" href="../album/viewalbum.php">No.6 Collaboration
                                Project</a></td>
                            <td><a class="songs-link-unstyled" href="../artist/EdSheeran.php">Ed Sheeran</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><a class="songs-link-unstyled" href="../title/TakeMeBackToLondon.php">Take Me Back to
                                London (feat. Stormzy)</a></td>
                            <td><a class="songs-link-unstyled" href="../album/viewalbum.php">No.6 Collaboration
                                Project</a></td>
                            <td><a class="songs-link-unstyled" href="../artist/EdSheeran.php">Ed Sheeran</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row mb-3">
                    <div class="ml-3 mb-3">
                        <button type="add" form="album" value="add">Add</button>
                    </div>
                    <div class="ml-3 mb-3">
                        <form method="get" action="deletesongsfromplaylist.php">
                            <button type="submit">Update Playlists</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>