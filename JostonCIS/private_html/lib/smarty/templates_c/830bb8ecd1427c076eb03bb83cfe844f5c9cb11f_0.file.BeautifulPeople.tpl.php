<?php
/* Smarty version 3.1.33, created on 2019-12-05 14:08:42
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\public_html\templates\BeautifulPeople.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de955bae2d624_14349973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '830bb8ecd1427c076eb03bb83cfe844f5c9cb11f' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\public_html\\templates\\BeautifulPeople.tpl',
      1 => 1575572919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de955bae2d624_14349973 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1>Beautiful People (feat. Khalid)</h1>
                </div>
                <form action="updatetitle.php" method="get" id="BeautifulPeople">
                    <fieldset>
                        <!-- Performed By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="performed">Performed By</label>
                            <div class="col-md-11">
                                <p>Ed Sheeran, Khalid</p>
                            </div>
                        </div>
                        <hr>
                        <!-- Written By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="written">Written By</label>
                            <div class="col-md-11">
                                <p>Ed Sheeran, FRED, Khalid Robinson, Max Martin, Shellback</p>
                            </div>
                        </div>
                        <hr>
                        <!-- Produced By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="produced">Produced By</label>
                            <div class="col-md-11">
                                <p>Ed Sheeran, Fred Gibson, Max Martin, Shellback</p>
                            </div>
                        </div>
                        <hr>
                        <!-- Added By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="added">Recently Added By</label>
                            <div class="col-md-11">
                                <p>User at 10/2/2019</p>
                            </div>
                        </div>
                        <hr>                        
                        <!-- Text Review-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="dob">Review</label>
                            <div class="col-md-11">
                                <p>This song is on FIRE!!!</p>
                                <!-- <textarea class="form-control" id="review" rows="4"></textarea> -->
                            </div>  
                        </div>
                        <hr>
                    </fieldset>
                </form>
                <div class="row ml-3 mb-3">
                    <button type="update" form="BeautifulPeople" value="update">Update</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
