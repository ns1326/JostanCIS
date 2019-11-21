<?php
/* Smarty version 3.1.33, created on 2019-11-20 20:21:30
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\public_html\templates\forgotconfirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd5e69a63dc34_39455916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df53c6da34ccbeb85bca0d91392da396d270f31f' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\public_html\\templates\\forgotconfirm.tpl',
      1 => 1574299067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd5e69a63dc34_39455916 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1>Music Now Confirmation Message</h1>
                </div>
                <div>
                    <p>If the email you entered is associated with an account,
                        an email will be sent with instructions to reset your
                        password. If you did not receive an email,
                        click "register Here" to register for an account. </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
