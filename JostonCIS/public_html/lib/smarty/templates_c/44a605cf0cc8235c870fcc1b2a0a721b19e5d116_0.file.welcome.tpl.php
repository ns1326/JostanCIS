<?php
/* Smarty version 3.1.33, created on 2019-11-20 20:19:43
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\public_html\templates\welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd5e62f5e0152_77873739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44a605cf0cc8235c870fcc1b2a0a721b19e5d116' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\public_html\\templates\\welcome.tpl',
      1 => 1574299067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd5e62f5e0152_77873739 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="row mt-4 ml-3 underlined">
                    <h1>Welcome to Music Now.</h1>
                </div>
                <div class="description ml-3 mt-2">
                    <h2>Description</h2>                
                    <p><b>Music Now</b> is a Swedish-American media services provider which is 
                        based in Luxembourg. Founded in 2006 in Sweden, the company's primary business is its 
                        audio streaming platform that provides DRM-protected music and podcasts from record 
                        labels and media companies.</p>

                    <p>Launched on October 7, 2008, the <b>Music Now</b> platform provides access to over 50 million tracks. 
                        Users can browse by parameters such as artist, album, or genre, and can create, edit, and share 
                        playlists. <b>Music Now</b> is available in most of Europe and the Americas, Australia, New Zealand, 
                        and parts of Africa and Asia, and on most modern devices, including Windows, macOS, and Linux 
                        computers, and iOS, and Android smartphones and tablets. As of October 2019, the company
                         had 248 million monthly active users, including 113 million paying subscribers.</p>
                </div> 
            </div>
        </div>
    </div>
</body>
</html><?php }
}
