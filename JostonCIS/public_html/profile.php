<!--Profile Page-->
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
                <div class="row">
                    <img src="images/placeholder-face-big.png"
                         class="rounded mx-auto d-block mt-3 mr-3 ml-3 mb-3 img-fluid"
                         alt="Profile Image Holder">
                    <p class="col-12 font-weight-bolder center">Username</p>
                </div>
                <hr>
                <div class="row ml-3 font-weight-bolder mt-4 primarycategory">
                    <p><a class="link-unstyled" href="profile.html">Account Overview</a></p>
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
                    <p><a class="link-unstyled" href="login.html">Log Out</a></p>
                </div>
                <hr>
            </div>
            <div class="col-8 bg-light">
                <div class="row mt-4 ml-3">
                    <h1>Account Overview</h1>
                </div>
                <div class="row mt-4 ml-3">
                    <h2>Profile</h2>
                </div>
                <form action="updateprofile.html" method="post" id="profile">
                    <fieldset>
                        <!-- Username-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="username">Username:</label>
                            <div class="col-md-8">
                                <p><?php echo $_POST["username"] ?></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Password-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Password:</label>
                            <div class="col-md-8">
                                <p>J73j2o3n3</p>
                            </div>
                        </div>
                        <hr>
                        <!-- Email-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">Email:</label>
                            <div class="col-md-8">
                                <p><?php echo $_POST["email"] ?></p>
                            </div>
                        </div>
                        <hr>
                        <!-- Date of Birth-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="dob">Date of Birth:</label>
                            <div class="col-md-8">
                                <p><?php echo $_POST["dob"] ?> (mm/dd/year)</p>
                            </div>
                        </div>
                        <hr>
                        <!-- Country-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="country">Country:</label>
                            <div class="col-md-6">
                                <p><?php echo $_POST["country"] ?></p>
                            </div>
                        </div>
                        <hr>
                    </fieldset>
                </form>
                <div class="row ml-3 mb-3">
                    <button type="edit" form="profile" value="edit">Edit</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>