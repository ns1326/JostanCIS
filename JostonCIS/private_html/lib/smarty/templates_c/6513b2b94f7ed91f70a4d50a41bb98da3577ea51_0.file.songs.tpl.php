<?php
/* Smarty version 3.1.33, created on 2019-11-19 22:50:06
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\private_html\templates\songs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd4b7ee775e26_22072117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6513b2b94f7ed91f70a4d50a41bb98da3577ea51' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\private_html\\templates\\songs.tpl',
      1 => 1574221547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd4b7ee775e26_22072117 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
                    <p><a class="link-unstyled" href="artists.html">My Artists</a></p>
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
                    <h1>My Songs</h1>
                </div>
                <!--Table-->
                <?php if ($_smarty_tpl->tpl_vars['nosongs']->value) {?>
                    <div class="col-8 bg-light nospacing ml-3">
                        There are no songs.
                    </div>
                <?php } else { ?>
                    <!-- <form action="songs/deletesongsfromsongs.html" method="get" id="deletesongs"> -->
                    <form action="songs/addsong.html" method="get" id="songs">
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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'songs_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['songs_id']->value) {
?>                                
                                    <tr>
                                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['songs_id']->value['SongID'];?>
</th>
                                        <td><a class="songs-link-unstyled" href="title/BeautifulPeople.html"><?php echo $_smarty_tpl->tpl_vars['songs_id']->value['Title'];?>
</a></td>
                                        <td><a class="songs-link-unstyled" href="album/viewalbum.html"><?php echo $_smarty_tpl->tpl_vars['songs_id']->value['Album_Name'];?>
</a></td>
                                        <td><a class="songs-link-unstyled" href="artist/EdSheeran.html"><?php echo $_smarty_tpl->tpl_vars['songs_id']->value['Artist_Name'];?>
</a></td>
                                        <td>
                                            <select name="Add to Playlist" style="width: 100px">
                                                <option value="default">Add to Playlist</option>
                                                <?php if ($_smarty_tpl->tpl_vars['songs_id']->value['Playlist_Name'] === false) {?>
                                                    <option value="none">No Playlist</option>
                                                <?php } else { ?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs_id']->value['Playlist_Name'], 'playlist_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['playlist_name']->value) {
?>                                                    
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['playlist_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['playlist_name']->value;?>
}</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                            </select>
                                        </td>
                                    </tr>                                    
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                 
                            </tbody>
                        </table>
                    </form>
                <?php }?>
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
</html><?php }
}
