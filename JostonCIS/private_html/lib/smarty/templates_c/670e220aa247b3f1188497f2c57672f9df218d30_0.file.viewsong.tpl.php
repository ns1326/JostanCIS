<?php
/* Smarty version 3.1.33, created on 2019-12-12 00:55:47
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\public_html\templates\viewsong.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df1d6631ca530_11350623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '670e220aa247b3f1188497f2c57672f9df218d30' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\public_html\\templates\\viewsong.tpl',
      1 => 1576130118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1d6631ca530_11350623 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <p class="col-12 font-weight-bolder center"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p>
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
                <!--Table-->
                <?php if ($_smarty_tpl->tpl_vars['nosongs']->value) {?>
                <div class="col-8 bg-light nospacing ml-3">
                    There are no songs.
                </div>
                <?php } else { ?>
                <div class="col-8 bg-light">
                    <div class="row mt-4 ml-3">
                        <h1><?php echo $_smarty_tpl->tpl_vars['song']->value['Title'];?>
</h1>
                    </div>
                </div>
                <form action="updatetitle.php" method="get" id="BeautifulPeople">
                    <fieldset>

                        <!-- Performed By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="performed">Artist</label>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['song']->value['Artist_Name'];
$_prefixVariable1 = ob_get_clean();
if (empty($_prefixVariable1)) {?>
                            <div class="col-md-11">
                                <p>Artist not known</p>
                            </div>
                            <?php } else { ?>
                            <div class="col-md-11">
                                <p><?php echo $_smarty_tpl->tpl_vars['song']->value['Artist_Name'];?>
</p>
                            </div>
                        </div>
                        <?php }?>
                        <hr>
                        <!-- Written By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="written">Written By</label>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['song']->value['Written_by'];
$_prefixVariable2 = ob_get_clean();
if (empty($_prefixVariable2)) {?>
                            <div class="col-md-11">
                                <p>Writer not known</p>
                            </div>
                            <?php } else { ?>

                            <div class="col-md-11">
                                <p><?php echo $_smarty_tpl->tpl_vars['song']->value['Written_by'];?>
</p>
                            </div>
                        </div>
                        <?php }?>
                        <hr
                        <!-- Produced By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="produced">Produced By</label>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['song']->value['Produced_by'];
$_prefixVariable3 = ob_get_clean();
if (empty($_prefixVariable3)) {?>
                            <div class="col-md-11">
                                <p>Producer not known</p>
                            </div>
                            <?php } else { ?>

                            <div class="col-md-11">
                                <p><?php echo $_smarty_tpl->tpl_vars['song']->value['Produced_by'];?>
</p>
                            </div>
                        </div>
                        <?php }?>
                        <hr>
                        <!-- Added By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="added">Added By</label>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['song']->value['Added_by'];
$_prefixVariable4 = ob_get_clean();
if (empty($_prefixVariable4)) {?>
                            <div class="col-md-11">
                                <p>Original Song</p>
                            </div>
                            <?php } else { ?>

                            <div class="col-md-11">
                                <p><?php echo $_smarty_tpl->tpl_vars['song']->value['Added_by'];?>
</p>
                            </div>
                        </div>
                        <?php }?>
                        <hr>
                        <!-- Added By -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="added">Playlists</label>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['song']->value['Playlist_Name'];
$_prefixVariable5 = ob_get_clean();
if (empty($_prefixVariable5)) {?>
                            <div class="col-md-11">
                                <p>Not in a Playlist</p>
                            </div>
                            <?php } else { ?>

                            <div class="col-md-11">
                                <p><?php echo $_smarty_tpl->tpl_vars['song']->value['Playlist_Name'];?>
</p>
                            </div>
                        </div>
                        <?php }?>
            </div>
            <hr>
            <!-- Text Review-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="dob">Review</label>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['song']->value['Reviews'];
$_prefixVariable6 = ob_get_clean();
if (empty($_prefixVariable6)) {?>
                <div class="col-md-11">
                    <p>No Written Reviews</p>
                </div>
                <?php } else { ?>

                <div class="col-md-11">
                    <p><?php echo $_smarty_tpl->tpl_vars['song']->value['Reviews'];?>
</p>
                </div>
            </div>
            <?php }?>
        </div>
        <hr>
        </fieldset>
        </form>
    </div>

    <?php }?>
</div>
</div>
</div>
</body>
</html><?php }
}
