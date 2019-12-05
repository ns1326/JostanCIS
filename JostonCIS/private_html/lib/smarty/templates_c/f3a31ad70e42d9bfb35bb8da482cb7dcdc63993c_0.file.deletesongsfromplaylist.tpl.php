<?php
/* Smarty version 3.1.33, created on 2019-12-05 14:33:47
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\public_html\templates\playlist\deletesongsfromplaylist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de95b9b06b759_39622344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3a31ad70e42d9bfb35bb8da482cb7dcdc63993c' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\public_html\\templates\\playlist\\deletesongsfromplaylist.tpl',
      1 => 1575574115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de95b9b06b759_39622344 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
            <div class="col-8 bg-light  nospacing">
                <div class="row mt-4 ml-3">
                    <h1>Delete Songs</h1>
                </div>
                <!--REMEMBER TO MAKE THE HTML BELOW TO PHP-->
                <!--Table-->        
                <form action="newplaylist.php" method="POST" id="viewplaylist">
                <!-- <form action="deletesongsforplaylist.php" method="POST" id="viewalbum"> -->
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Album</th>
                                <th scope="col">Artist</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><input type="checkbox" name="1"></th>
                                <th scope="row">1</th>
                                <td><a class="songs-link-unstyled" href="../title/BeautifulPeople.php">Beautiful People (feat. Khalid)</a></td>
                                <td><a class="songs-link-unstyled" href="viewalbum.php">No.6 Collaboration Project</a></td>
                                <td><a class="songs-link-unstyled" href="../artist/EdSheeran.php">Ed Sheeran</a></td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" name="2"></th>
                                <th scope="row">2</th>
                                <td><a class="songs-link-unstyled" href="../title/IDon'tCare.php">I Don't Care (with Justin Bieber)</a></td>
                                <td><a class="songs-link-unstyled" href="viewalbum.php">No.6 Collaboration Project</a></td>
                                <td><a class="songs-link-unstyled" href="../artist/EdSheeran.php">Ed Sheeran</a></td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" name="3"></th>
                                <th scope="row">3</th>
                                <td><a class="songs-link-unstyled" href="../title/TakeMeBackToLondon.php">Take Me Back to London (feat. Stormzy)</a></td>
                                <td><a class="songs-link-unstyled" href="viewalbum.php">No.6 Collaboration Project</a></td>
                                <td><a class="songs-link-unstyled" href="../artist/EdSheeran.php">Ed Sheeran</a></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <div class="row ml-3 mb-3">
                    <button type="delete" form="viewplaylist" name="delete" >Delete</button>
                </div>                            
            </div>
        </div>
    </div>
</body>
</html><?php }
}
