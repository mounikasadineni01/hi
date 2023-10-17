<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>

<body style="overflow: hidden;">
    <?php include 'includes/header.php'; ?>
    <div id="content">
        <div class="container-fluid decor_bg" id="login-panel">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning" style="color:red;"><i>Login to use all services</i>
                            <p>
                            <form action="login_submit.php" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="e-mail" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-danger">Login</button><br><br>
                                <?php echo filter_input(INPUT_GET, 'error'); ?>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account? <a href="signup.php">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>