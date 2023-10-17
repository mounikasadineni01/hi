<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
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
                <h1>Celebrate with Us and Cherish your Memories!</h1>
            </center>
        </div>
        <div class="row text-center">
            <div class="thumbnail">
                <img src="img/planwithus.jfif" alt="Event Planning" style="height:19rem;width:25rem;">
                <div class="caption">
                    <h3>Event Planners</h3>
                    <p>The Surprise Planner is an Event planner and Decoration that provides the best decoration for
                        balloon decoration, home surprises, candlelight dinners, Birthday surprises, anniversaries, couple parties, love proposals, weddings, rooftop dinners, and romantic experiences.
                        We have a great team of well-experienced professionals in their work. The best thing is that we provide services according to your budget, i.e; an affordable price.
                        We care about your love and feelings, so we decorate your destination to the best. We provide a plethora of services across India.
                        Apart from decoration, we also provide rooms, party hall, space for a convention, etc. at the best prices.</p>
                    <p>Pay Advance and Get in touch with us <b>Price: Rs.10999.99</b></p> <br>

                    <?php
                    $emaill = $_SESSION['email'];
                    $query = "SELECT contact FROM users WHERE email='$emaill'";
                    $result = mysqli_query($con, $query) or die($mysqli_error($con));
                    $row = mysqli_fetch_array($result);
                    $_SESSION['contact'] = $row['contact'];
                    ?>

                    <div class="row text-center">
                        <form method="post">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Price</span>
                                <input id="advpaid" name="advpaid" type="text" class="form-control" value="Rs.10999.99" aria-describedby="basic-addon1" disabled>
                            </div> <br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Your Name</span>
                                <input id="yourname" name="yourname" type="text" maxlength="20" class="form-control" placeholder="Enter your name" aria-describedby="basic-addon1" required>
                            </div> <br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Email Address</span>
                                <input id="youremail" name="youremail" type="email" class="form-control" value="<?php echo $_SESSION['email']; ?>" aria-describedby="basic-addon1" disabled>
                            </div> <br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Phone Number +91</span>
                                <input id="yourphone" name="yourphone" type="text" maxlength="10" class="form-control" value="<?php echo $_SESSION['contact']; ?>" aria-describedby="basic-addon1" required>
                            </div> <br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Event Name</span>
                                <input id="eventname" name="eventname" type="text" maxlength="20" class="form-control" placeholder="Enter your name" aria-describedby="basic-addon1" required>
                            </div> <br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Location</span>
                                <textarea id="location" name="location" type="text" rows="8" cols="200" maxlength="200" class="form-control" placeholder="Your Address" required> </textarea>
                            </div> <br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Event Date</span>
                                <input id="date" name="date" type="date" class="form-control" value="1" aria-describedby="basic-addon1" required>
                            </div> <br>
                            <button type="submit" name="submit" class="btn btn-success">Book now</button><br>
                        </form>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['yourname'];
                $email = $_SESSION['email'];
                $contact = $_SESSION['contact'];
                $eventname = $_POST['eventname'];
                $location = $_POST['location'];
                $date = $_POST['date'];

                $query = "INSERT INTO eventplanning(name, email, contact, eventname, location, date)VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $eventname . "','" . $location . "','" . $date . "')";
                $check = mysqli_query($con, $query) or die(mysqli_error($con));

                if ($check) {
                    echo "<script>alert('Thank you! Our Event Planners will reach out to you shortly.'); window.location = 'index.php#categories';</script>";
                } else {
                    // echo 'Message has been sent';
                    echo "<script>alert('Error! Try again'); window.location = 'planwithus.php';</script>";
                }
            }
            ?>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>

</html>