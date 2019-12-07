<?php
session_start();
	include"connection.php";

	
	?>
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jan 2016 18:08:38 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h6 class="logo-name">IN+</h6>

            </div>
            
            <form class="m-t" role="form" action="logincheck.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username"  name="a_id" id="a_id">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password"  name="a_pwd" id="a_pwd">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jan 2016 18:08:38 GMT -->
</html>
