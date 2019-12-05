<?php
/* Smarty version 3.1.33, created on 2019-12-05 14:10:57
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\public_html\templates\updatetitle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de95641567815_07946499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57437a23d8bd03bc31f2e713e88904aba0fd4541' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\public_html\\templates\\updatetitle.tpl',
      1 => 1575573056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de95641567815_07946499 (Smarty_Internal_Template $_smarty_tpl) {
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
                <form action="BeautifulPeople.php" method="get" id="BeautifulPeople">
                    <fieldset>
                        <!-- Performed By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="performed">Performed By</label>
                            <div class="col-md-11">
                                <input id="performed" name="performed" type="text" placeholder="Ed Sheeran, Khalid"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- Written By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="written">Written By</label>
                            <div class="col-md-11">
                                <input id="written" name="written" type="text" 
                                    placeholder="Ed Sheeran, FRED, Khalid Robinson, Max Martin, Shellback"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- Produced By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="produced">Produced By</label>
                            <div class="col-md-11">
                                <input id="produced" name="produced" type="text" 
                                    placeholder="Ed Sheeran, Fred Gibson, Max Martin, Shellback" 
                                    class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- Added By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="added">Recently Added By</label>
                            <div class="col-md-11">
                                <input id="produced" name="produced" type="text" placeholder="User at 10/2/2019" 
                                    class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                    </fieldset>
                </form>
                <div class="row ml-3 mb-3">
                    <button type="submit" form="BeautifulPeople" value="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
