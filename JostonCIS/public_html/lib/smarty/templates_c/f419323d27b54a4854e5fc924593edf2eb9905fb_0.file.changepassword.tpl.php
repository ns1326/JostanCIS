<?php
/* Smarty version 3.1.33, created on 2019-11-20 20:21:42
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\public_html\templates\changepassword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd5e6a674e679_92078751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f419323d27b54a4854e5fc924593edf2eb9905fb' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\public_html\\templates\\changepassword.tpl',
      1 => 1574299067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd5e6a674e679_92078751 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="row align-center changepassdesign">
            <img src="https://via.placeholder.com/2000x150?text=Welcome+to+Music+Now" class="img-fluid ">
        </div>
        <div class="row">
            <div class="col-8 bg-light">
                <div class="description ml-3 mt-2">
                    <h2>Input the temporary password and set your new password. </h2>    
                </div>   
                 <form action="changepassword.php" method="post" id="changepassword">
                    <!--Temporary Password Text input-->
                    <div class="col-8 bg-light">
                        <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message1']->value;?>
</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="salt">Temporary Password</label>
                        <div class="col-md-8">
                        <input id="salt" name="salt" type="text" placeholder=""
                            class="form-control input-md" >
                    </div>

                    <!--New Password Text input-->                    
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password">Password</label>
                        <div class="col-md-8">
                        <input id="password" name="password" type="text" placeholder=""
                            class="form-control input-md" >
                    </div>
                    </div>
                    <div class="col-8 bg-light">
                        <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message2']->value;?>
</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="confirmpassword">Confirm Password</label>
                        <div class="col-md-8">
                            <input id="confirmpassword" name="confirmpassword" type="text" placeholder=""
                                class="form-control input-md ">
                        </div>
                    </div>
                    <hr>
                    <div class="row ml-3 mb-3">
                        <button type="submit" form="changepassword" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
