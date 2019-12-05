<?php
/* Smarty version 3.1.33, created on 2019-12-05 13:45:48
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\public_html\templates\delete_album.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de9505c85f1f5_81652801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b65616625e34a42a885b8002e03c28c05904c58' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\public_html\\templates\\delete_album.tpl',
      1 => 1575571323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de9505c85f1f5_81652801 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="row ml-3 font-weight-bolder mt-4 primarycategory">
                    <p><a class="link-unstyled" href="album.php">My Albums</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="../artists.html">My Artists</a></p>
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
                <form action="addalbum.html" method="get" id="album">
                    <fieldset>
                        <!-- Album Name-->
                        <div class="form-group" background-color="black">
                            <label class="col-md-4 control-label" for="HeartBreakonaFullMoon">Heart Break on a Full Moon</label>
                            <div class="col-md-8">
                                <p><b>Chris Brown</b></p>
                            </div>
                            <div class="col-md-8">
                                <button formaction="delete_confirm.html">Delete Album</button>
                            </div>                            
                        </div>       
                        <hr>
                        <!-- Album Two -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Purpose"><a class="album-link-unstyled"                                 
                                href="viewalbum.html">No.6 Collaboration Project</a></label>
                            <div class="col-md-8">
                                <p><b><a class="album-link-unstyled" href="EdSheeran.tpl">Ed Sheeran</a></b></p>
                            </div>
                            <div class="col-md-8">
                                <button formaction="delete_confirm.html">Delete Album</button>
                            </div>  
                        </div>
                        <hr>
                        <!-- Album Three-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="FreeSpirit">Free Spirit</label>
                            <div class="col-md-8">
                                <p><b>Khalid</b></p>
                            </div>
                            <div class="col-md-8">
                                <button formaction="delete_confirm.html">Delete Album</button>
                            </div>  
                        </div>
                        <hr>
                        <!-- Album Four-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="HereasinHeaven">Here as in Heaven</label>
                            <div class="col-md-8">
                                <p><b>Elevation Worship</b></p>
                            </div>
                            <div class="col-md-8">
                                <button formaction="delete_confirm.html">Delete Album</button>
                            </div>                              
                        </div>
                        <hr>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</body>
</html><?php }
}
