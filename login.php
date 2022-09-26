<html>

<head>
    <title>User login and Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <meta name="google-signin-client_id"
        content="177592111980-oear8rclpijum4n2td4eedrvt9ljspsv.apps.googleusercontent.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body>
    <script src="socialmedia.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2 style="text-align:center">Login Here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required></input>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required></input>
                        </div>
                        <button type="submit" class="btn btn-primary"> Login </button>
                        <!-- New code starts here -->
                        <div class="g-signin2" data-onsuccess="onSignIn"></div>
                        <div class="retreivedata">
                            <p>Name</p>
                            <p id="name" class="alert alert-success"></p>
                            <p>Profile Pic</p>
                            <img id="image" class="rounded-circle" width="100" height="100" />
                            <p>Email</p>
                            <p id="email"></p>
                            <button type="button" class="btn btn-danger" onclick="signOut();">Sign Out</button>
                        </div>

                        <!--<div class="col">
                            <a href="#" class="fb btn">
                                <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                            </a>
                            <a href="#" class="btn google">
                                <i class="fa fa-google fa-fw"></i> Login with Google
                            </a>
                        </div>-->
                        <!-- New code ends here-->
                    </form>
                </div>
                <div class="col-md-6 login-right">
                    <h2 style="text-align:center">Register Here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required></input>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required></input>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" required></input>
                        </div>
                        <button type="submit" class="btn btn-primary"> Register </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>