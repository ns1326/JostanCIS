<?php
/* Smarty version 3.1.33, created on 2019-11-19 21:02:42
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\private_html\templates\forgotpassword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd49ec2b6e752_15165758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '839e8d0b763464fe6e366de6abaf948c6c1cb9d4' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\private_html\\templates\\forgotpassword.tpl',
      1 => 1574215358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd49ec2b6e752_15165758 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <p>Have an Account? Click Below!</p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="login.php">Login Here</a></p>
                </div>
                <hr>
            </div>
            <div class="col-8 bg-light">
                <div class="row mt-4 ml-3">
                    <h1>Music Now Forgot Password</h1>
                </div>
                <form action="forgotpassword.php" method="post" id="forgotpassword">
                    <fieldset>
                        <!-- E-mail Text input-->
                        <div class="form-group">
                            <div class="col-8 bg-light">
                                <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
                            </div>
                            <label class="col-md-6 control-label" for="email">Enter your e-mail</label>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="E-mail"
                                       class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                    </fieldset>
                </form>
                <div class="row ml-3 mb-3">
                    <button type="submit" form="forgotpassword" name="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
