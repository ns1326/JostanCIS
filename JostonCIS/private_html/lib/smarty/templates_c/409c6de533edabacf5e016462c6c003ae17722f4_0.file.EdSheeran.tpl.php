<?php
/* Smarty version 3.1.33, created on 2019-12-10 15:33:16
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\public_html\templates\artist\EdSheeran.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df0010c81afa3_76521992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '409c6de533edabacf5e016462c6c003ae17722f4' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\public_html\\templates\\artist\\EdSheeran.tpl',
      1 => 1575574064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df0010c81afa3_76521992 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Profile Page-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Overview</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">

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
                    <img src="../images/placeholder-face-big.png"
                        class="rounded mx-auto d-block mt-3 mr-3 ml-3 mb-3 img-fluid"
                        alt="Profile Image Holder">
                    <p class="col-12 font-weight-bolder center">Username</p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="../profile.php">Account Overview</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="../album/album.php">My Albums</a></p>
                </div>
                <hr>
                <div class="row ml-3 font-weight-bolder mt-4 primarycategory">
                    <p><a class="link-unstyled" href="../artists.php">My Artists</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="../songs.php">My Songs</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="../playlists.php">My Playlists</a></p>
                </div>
                <hr>
                <div class="row ml-3 mt-2">
                    <p><a class="link-unstyled" href="../login.php">Log Out</a></p>
                </div>
                <hr>
            </div>
            <div class="col-8 bg-light">
                <div class="row mt-4 ml-3">
                    <h1>Ed Sheeran</h1>
                </div>
                <div class="row ml-3">
                    <img src="artistimages/EdSheeran.jpg" class="img-fluid img-size" alt="Artist Picture">
                </div>
                <div class="row mt-4 ml-3 underlined">
                    <h2>Who is Ed Sheeran?</h2>
                </div>
                <div class="row ml-3 mr-3">
                    <p>
                        Ed Sheeran is a singer/songwriter who began playing guitar at a young age and soon after 
                        started writing his own songs. When he was just a teenager, he moved to London to pursue his music, 
                        and his outpouring of creativity added up to several early EPs and hundreds of live shows. 
                        Drawing attention for his online performances, Sheeran hit No. 1 on the iTunes chart before he ever 
                        signed with a record label. Since signing with Atlantic, Sheeran has sold millions of records, had a 
                        song appear in the second installment of The Hobbit trilogy and won Grammys for hits like 
                        "Thinking Out Loud" (2014) and "Shape of You" (2017).
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
