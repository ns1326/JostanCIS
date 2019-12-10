<?php
/* Smarty version 3.1.33, created on 2019-12-10 16:19:56
  from 'C:\Apache24\htdocs\final\JostanCIS\JostonCIS\public_html\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df00bfc84d8f2_35047092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1056912e1349f8846c7da164c9dfc4791e0ffae0' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\final\\JostanCIS\\JostonCIS\\public_html\\templates\\registration.tpl',
      1 => 1576012786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df00bfc84d8f2_35047092 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

</head>
<body class="bg-primary">

<div class="container">
    <div class="col">
        <div class="row align-center">
            <img src="https://via.placeholder.com/2000x150?text=Welcome+to+Music+Now" class="img-fluid" alt="placeholder">
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
                    <h1>Music Now Registration</h1>
                </div>
                <div class="row mt-4 ml-3">
                    <h2>Profile Details</h2>
                </div>
                <form action="registration.php" method="post" id="registration">
                    <fieldset>
                        <!-- First Name Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="firstname">First Name</label>
                            <div class="col-md-8">
                                <input id="firstname" name="firstname" type="text" placeholder="First Name"
                                    class="form-control input-md" required>
                            </div>
                        </div>
                        <hr>
                        <!-- Last Name Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="lastname">Last Name</label>
                            <div class="col-md-8">
                                <input id="lastname" name="lastname" type="text" placeholder="Last Name"
                                    class="form-control input-md" required>
                            </div>
                        </div>
                        <hr>
                        <!-- Username Text input-->
                        <div class="col-8 bg-light">
                            <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['usermessage']->value;?>
</p>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="username">Username</label>
                            <div class="col-md-8">
                                <input id="username" name="username" type="text" placeholder="Username"
                                    class="form-control input-md" required>
                            </div>
                        </div>
                        <hr>
                        <!--Password Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Password</label>
                            <div class="col-md-8">
                                <input id="password" name="password" type="text" placeholder="Password"
                                    class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="col-8 bg-light">
                            <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message1']->value;?>
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
                        <!-- Email Text input-->
                        <div class="col-8 bg-light">
                            <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message2']->value;?>
</p>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">Email</label>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="E-mail"
                                    class="form-control input-md" required>
                            </div>
                        </div>
                        <hr>
                        <!-- Date Of Birth Text input-->
                        <div class="col-8 bg-light">
                            <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message3']->value;?>
</p>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="dob">Date of Birth</label>
                            <div class="col-md-8">
                                <input id="dob" name="dob" type="text" placeholder="yyyy-mm-dd" required
                                    class="form-control input-md" typeof="date">
                            </div>
                        </div>
                        <hr>
                        <!-- Country Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="country">Country</label>
                            <div class="col-md-6">
                                <input id="country" name="country" type="text" placeholder="Country" required
                                    class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                    </fieldset>
                </form>
                <div class="row ml-3 mb-3">
                    <button type="submit" form="registration" value="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }
}
