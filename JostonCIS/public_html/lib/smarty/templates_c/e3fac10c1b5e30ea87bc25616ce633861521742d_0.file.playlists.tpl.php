<?php
/* Smarty version 3.1.33, created on 2019-11-13 19:46:14
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\private_html\templates\playlists.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcca3d69bccc7_97232297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3fac10c1b5e30ea87bc25616ce633861521742d' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\private_html\\templates\\playlists.tpl',
      1 => 1573692350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcca3d69bccc7_97232297 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
                    <p><a class="link-unstyled" href="profile.html">Account Overview</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="album/album.php">My Albums</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="artists.html">My Artists</a></p>
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
                    <p><a class="link-unstyled" href="login.html">Log Out</a></p>
                </div>
                <hr>
            </div>
            <div class="col-8 bg-light">
                <div class="row mt-4 ml-3">
                    <h1>Playlists</h1>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['noplaylists']->value) {?>
                    <div class="col-8 bg-light nospacing ml-3">
                        There are no playlists.
                    </div>
                <?php } else { ?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['playlists']->value, 'playlists_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['playlists_id']->value) {
?>
                        <form action="PlaylistView/CreatePlaylist.html" method="get" id="createplaylist">
                            <div class="row mt-4 ml-3">
                                <h2><a class="album-link-unstyled" 
                                href="PlaylistView/PlaylistView.html"><?php echo $_smarty_tpl->tpl_vars['playlists_id']->value['Playlist_Name'];?>
</a></h2>
                            </div>
                            <hr>
                        </form>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <div class="row ml-2 mb-3">
                    <button type="create" form="createplaylist" value="create">Create New</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
