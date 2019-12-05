<?php
/* Smarty version 3.1.33, created on 2019-12-05 14:33:42
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\public_html\templates\playlist\CreatePlaylist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de95b964b19f5_87917073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e985672cfc2e8c76cdf4b6b0826f488ba5046fd8' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\public_html\\templates\\playlist\\CreatePlaylist.tpl',
      1 => 1575574111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de95b964b19f5_87917073 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
                    <h1>Add Playlist</h1>
                </div>
                <form action="../playlists.php" method="get" id="newplaylist">
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
                        <!-- Size Limit -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="size">Size Limit</label>
                            <div class="col-md-10">
                                <input id="size" name="size" type="text" placeholder="Size Limit"
                                       class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                    </fieldset>
                </form>
                <div class="row ml-3 mb-3">
                    <button type="text" form="newplaylist" value="add">Add</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
