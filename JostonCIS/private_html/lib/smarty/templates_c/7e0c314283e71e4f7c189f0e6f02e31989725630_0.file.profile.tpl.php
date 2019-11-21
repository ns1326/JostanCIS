<?php
/* Smarty version 3.1.33, created on 2019-11-19 19:48:20
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\private_html\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd48d54798a24_94652734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e0c314283e71e4f7c189f0e6f02e31989725630' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\private_html\\templates\\profile.tpl',
      1 => 1574210898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd48d54798a24_94652734 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Profile Page-->
<!DOCTYPE html>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value, 'profile_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['profile_id']->value) {
?>
                <div class="row">
                        <img src="images/placeholder-face-big.png"
                            class="rounded mx-auto d-block mt-3 mr-3 ml-3 mb-3 img-fluid"
                            alt="Profile Image Holder">
                        <p class="col-12 font-weight-bolder center"><?php echo $_smarty_tpl->tpl_vars['profile_id']->value['username'];?>
</p>
                    </div>
                    <hr>
                    <div class="row ml-3 font-weight-bolder mt-4 primarycategory">
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
                    <div class="row ml-3 mt-2">
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
                <div class="col-8 bg-light">
                    <div class="row mt-4 ml-3">
                        <h1>Account Overview</h1>
                    </div>
                    <div class="row mt-4 ml-3">
                        <h2>Profile</h2>
                    </div>
                    <form action="profile.php" method="post" id="profile">
                        <fieldset>
                            <!-- Username-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="username">Username:</label>
                                <div class="col-md-8">
                                    <p><?php echo $_smarty_tpl->tpl_vars['profile_id']->value['username'];?>
</p>
                                </div>
                            </div>
                            <hr>
                            <!-- Password-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">Password:</label>
                                <div class="col-md-8">
                                    <p><?php echo $_smarty_tpl->tpl_vars['profile_id']->value['password'];?>
</p>
                                </div>
                            </div>
                            <hr>
                            <!-- Email-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="email">Email:</label>
                                <div class="col-md-8">
                                    <p><?php echo $_smarty_tpl->tpl_vars['profile_id']->value['email'];?>
</p>
                                </div>
                            </div>
                            <hr>
                            <!-- Date of Birth-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="dob">Date of Birth:</label>
                                <div class="col-md-8">
                                    <p><?php echo $_smarty_tpl->tpl_vars['profile_id']->value['dob'];?>
 (yyyy-mm-dd)</p>
                                </div>
                            </div>
                            <hr>
                            <!-- Country-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="country">Country:</label>
                                <div class="col-md-6">
                                    <p><?php echo $_smarty_tpl->tpl_vars['profile_id']->value['country'];?>
</p>
                                </div>
                            </div>
                            <hr>
                        </fieldset>
                    </form>
                    <div class="row ml-3 mb-3">
                        <button type="edit" form="profile" name="edit">Edit</button>
                    </div>
                    <div class="row ml-3 mb-3">
                        <button type="delete" form="profile" name="delete">Delete</button>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }
}
