<?php
/* Smarty version 3.1.33, created on 2019-12-11 21:12:34
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\public_html\templates\viewalbum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df1a2126ed5a4_79134209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '366c7f8b808a5895c68301fa0f23a3165ac782b2' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\public_html\\templates\\viewalbum.tpl',
      1 => 1576116251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1a2126ed5a4_79134209 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE
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
                    <p class="col-12 font-weight-bolder center">Username</p>
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'songs_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['songs_id']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['songs_id']->value['Album_ID'] == $_smarty_tpl->tpl_vars['key']->value) {?>
                            <h1><?php echo $_smarty_tpl->tpl_vars['songs_id']->value['Album_Name'];?>
</h1>
                </div>
                            <div>
                            <p>Created by <?php echo $_smarty_tpl->tpl_vars['songs']->value[$_smarty_tpl->tpl_vars['key']->value]['Added_by'];?>
</p>
                            </div>
                            <?php break 1;?>
                            <?php } else { ?>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <!--Table-->
                <?php if ($_smarty_tpl->tpl_vars['nosongs']->value) {?>
                    <div class="col-8 bg-light nospacing ml-3">
                        There are no songs.
                    </div>
                <?php } else { ?>
                    <!-- <form action="songs/deletesongsfromsongs.php" method="get" id="deletesongs"> -->
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Artist</th>
                            </tr>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'songs_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['songs_id']->value) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['songs_id']->value['Album_ID'] == $_smarty_tpl->tpl_vars['key']->value) {?>
                                <tr>
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 2) {?>
                                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['songs_id']->value['SongID']-4;?>
 </th>
                                    <?php } else { ?>
                                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['songs_id']->value['SongID'];?>
 </th>
                                    <?php }?>
                                    <td><a class="songs-link-unstyled" href="viewsong.php?id=<?php echo $_smarty_tpl->tpl_vars['songs_id']->value['SongID']-1;?>
"><?php echo $_smarty_tpl->tpl_vars['songs_id']->value['Title'];?>
</a></td>
                                    <td><a class="songs-link-unstyled" href="artist/EdSheeran.php"><?php echo $_smarty_tpl->tpl_vars['songs_id']->value['Artist_Name'];?>
</a></td>
                                </tr>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                <?php }?>
                <hr>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
