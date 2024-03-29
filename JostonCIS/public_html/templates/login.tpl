<!DOCTYPE html>
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
                    <p class="text-danger">{$message}</p>
                </div>

                <form action="login.php" method="post" id="login">
                    <fieldset>
                        <!-- Username Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="username">Username</label>
                            <div class="col-md-8">
                                <input id="username" name="username" type="text" placeholder="Username" value="{$username}"
                                       class="form-control input-md" required>
                            </div>
                        </div>
                        <hr>
                        <!-- Password Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Password </label>
                            <div class="col-md-8">
                                <input id="password" name="password" type="password" placeholder="{$password}"
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
</html>