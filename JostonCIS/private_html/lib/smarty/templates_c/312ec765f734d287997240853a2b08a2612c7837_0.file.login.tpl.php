<?php
/* Smarty version 3.1.33, created on 2019-12-12 14:21:26
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\public_html\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df2933663bad3_10277462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '312ec765f734d287997240853a2b08a2612c7837' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\public_html\\templates\\login.tpl',
      1 => 1576178482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df2933663bad3_10277462 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

</head>
<body class="bg-primary">

<div class="container">
    <div class="col">
        <div class="row align-center">
            <img src="https://via.placeholder.com/2000x150?text=Welcome+to+Music+Now" class="img-fluid">
        </div>
        <div class="row">
            <div class="col-4 bg-secondary text-white">
                <hr>
                <div class="row ml-3 font-weight-bolder mt-4">
                    <p>Don't have an Account? Click Below!</p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="registration.php">Register Here</a></p>
                </div>
                <hr>
                <div class="row ml-3 font-weight-bolder mt-4">
                    <p><a class="link-unstyled" href="forgotpassword.php">Forgot Password? Click Here</a></p>
                </div>
                <hr>
            </div>
            <div class="col-8 bg-light">
                <div class="row mt-4 ml-3">
                    <h1>Music Now Login</h1> <br>
                </div>
                <div class="col-8 bg-light">
                    <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
                </div>

                <form action="login.php" method="post" id="login">
                    <fieldset>
                        <!-- Username Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="username">Username</label>
                            <div class="col-md-8">
                                <input id="username" name="username" type="text" placeholder="Username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"
                                       class="form-control input-md" required>
                            </div>
                        </div>
                        <hr>
                        <!-- Password Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Password </label>
                            <div class="col-md-8">
                                <input id="password" name="password" type="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"
                                       class="form-control input-md" required>
                            </div>
                        </div>
                        <hr>
                    </fieldset>
                </form>
                <div class="row ml-3 mb-3">
                    <button type="submit" form="login" value="Submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
