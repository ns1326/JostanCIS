<?php
/* Smarty version 3.1.33, created on 2019-11-19 22:42:14
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\private_html\templates\updateprofile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd4b61643b8e8_37006735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '570a565875fd413024b8944a1435da92f29be213' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\private_html\\templates\\updateprofile.tpl',
      1 => 1574221324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd4b61643b8e8_37006735 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1>Edit Profile</h1>
                </div>
                <form action="updateprofile.php" method="post" id="updateprofile">
                    <fieldset>
                        <!-- Username Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="username">Username</label>
                            <div class="col-md-8">
                                <input id="username" name="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value['username'];?>
"class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- Password Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Password</label>
                            <div class="col-md-8">
                                <input id="password" name="password" type="password" value="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value['password'];?>
" readonly
                                       class="form-control input-md">
                            </div>
                            <br>
                            <label class="col-md-4 control-label" for="newpassword">New Password</label>
                            <div class="col-md-8">
                                <input id="newpassword" name="newpassword" type="text" placeholder=""
                                       class="form-control input-md">
                            </div>
                            <!--Line Break-->   
                            <div class="col-8 bg-light">
                                <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
                            </div>
                            <br>
                            <label class="col-md-4 control-label" for="confirmpassword">Confirm Password</label>
                            <div class="col-md-8">
                                <input id="confirmpassword" name="confirmpassword" type="text" placeholder=""
                                       class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- First Name Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="firstname">First Name</label>
                            <div class="col-md-8">
                                <input id="firstname" name="firstname" type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value['firstname'];?>
"
                                       class="form-control input-md">
                            </div>
                        </div>
                        <!-- Last Name Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="lastname">Last Name</label>
                            <div class="col-md-8">
                                <input id="lastname" name="lastname" type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value['lastname'];?>
"
                                       class="form-control input-md">
                            </div>
                        </div>
                        <!-- Email Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">Email</label>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value['email'];?>
" readonly
                                       class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- Date of Birth Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="dob">Date of Birth</label>
                            <div class="col-md-8">
                                <input id="dob" name="dob" type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value['dob'];?>
"
                                       class="form-control input-md">
                                <span class="help-block">yyyy-mm-dd</span>
                            </div>
                        </div>
                        <hr>
                        <!-- Country Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="country">Country</label>
                            <div class="col-md-6">
                                <input id="country" name="country" type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value['country'];?>
"
                                       class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                    </fieldset>
                </form>
                <div class="row ml-3 mb-3">
                    <button type="update" form="updateprofile" value="update">Update</button>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
