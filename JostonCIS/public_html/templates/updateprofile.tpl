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
            {foreach $profile as $profile_id}
                <div class="row">
                    <img src="images/placeholder-face-big.png"
                         class="rounded mx-auto d-block mt-3 mr-3 ml-3 mb-3 img-fluid"
                         alt="Profile Image Holder">
                    <p class="col-12 font-weight-bolder center">{$profile_id.username}</p>
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
                    <p><a class="link-unstyled" href="artists.php">My Artists</a></p>
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
                                <input id="username" name="username" type="text" value="{$profile_id.username}"class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- Password Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Password</label>
                            <div class="col-md-8">
                                <input id="password" name="password" type="password" value="{$profile_id.password}" readonly
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
                                <p class="text-danger">{$message}</p>
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
                                <input id="firstname" name="firstname" type="text" value="{$profile_id.firstname}"
                                       class="form-control input-md">
                            </div>
                        </div>
                        <!-- Last Name Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="lastname">Last Name</label>
                            <div class="col-md-8">
                                <input id="lastname" name="lastname" type="text" value="{$profile_id.lastname}"
                                       class="form-control input-md">
                            </div>
                        </div>
                        <!-- Email Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">Email</label>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" value="{$profile_id.email}" readonly
                                       class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                        <!-- Date of Birth Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="dob">Date of Birth</label>
                            <div class="col-md-8">
                                <input id="dob" name="dob" type="text" value="{$profile_id.dob}"
                                       class="form-control input-md">
                                <span class="help-block">yyyy-mm-dd</span>
                            </div>
                        </div>
                        <hr>
                        <!-- Country Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="country">Country</label>
                            <div class="col-md-6">
                                <input id="country" name="country" type="text" value="{$profile_id.country}"
                                       class="form-control input-md">
                            </div>
                        </div>
                        <hr>
                    </fieldset>
                </form>
                <div class="row ml-3 mb-3">
                    <button type="update" form="updateprofile" value="update">Update</button>
                </div>
            {/foreach}
            </div>
        </div>
    </div>
</body>
</html>