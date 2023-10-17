<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plan Surprises with Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Get your own code at fontawesome.com-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <div class="container">
        <div class="jumbotron home-spacer" id="products-jumbotron">
            <center>
                <h2>Celebrate with Us and Cherish your Memories!</h2>
            </center>
        </div>
        <div class="row text-center">
            <div class="thumbnail">
                <img src="img/planwithus.jfif" alt="Event Planning" style="height:19rem;width:25rem;">
                <div class="caption">
                    <h3>Event Planners</h3>
                    <p>The Surprise Planner is an Event planner and Decoration that provides a plethora of services across India...</p>
                    <?php
                    if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-danger btn-block">Know More</a></p>
                    <?php
                    } else { ?>
                        <p><a href="eventplanning.php" role="button" class="btn btn-success btn-block">Book now</a></p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>

</html>