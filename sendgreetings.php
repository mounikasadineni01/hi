<?php
require("includes/common.php");
require './PHPMailer/class.phpmailer.php';
require("./PHPMailer/PHPMailerAutoload.php");
require("./PHPMailer/credential.php");
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Greetings</title>
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
    <div class="container" id="content">
        <div class="jumbotron home-spacer" id="products-jumbotron">
            <center>
                <h2>Send Greetings</h2>
        </div>
        <hr>

        <div class="row text-center">
            <form method="post">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">To</span>
                    <input id="toemail" name="toemail" type="email" class="form-control" placeholder="Enter Email address" aria-describedby="basic-addon1" required>
                </div> <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">From</span>
                    <input id="fromemail" name="fromemail" type="email" class="form-control" value="<?php echo $_SESSION['email']; ?>" aria-describedby="basic-addon1" disabled>
                </div> <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Subject</span>
                    <input id="subject" name="subject" type="text" maxlength="40" class="form-control" placeholder="Enter Subject / Title" aria-describedby="basic-addon1" required>
                </div> <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Greetings</span>
                    <textarea id="occasion" name="occasion" type="text" rows="8" cols="200" maxlength="100" class="form-control" placeholder="Enter your Greetings" required> </textarea>
                </div> <br>
                <button type="submit" name="submit" class="btn btn-danger">Send Greetings</button><br>
            </form>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            $mail = new PHPMailer;
            $mail->SMTPDebug = 4;

            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = EMAIL; // SMTP username
            $mail->Password = PASS; // SMTP password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587; // TCP port to connect to

            $mail->setFrom(EMAIL, $_SESSION['email']);
            $mail->addAddress($_POST['toemail']); // Add a recipient

            $mail->addReplyTo($_SESSION['email']);
            $mail->isHTML(true); // Set email format to HTML

            $mail->Subject = $_POST['subject'];
            $mail->Body    = '<div style="background-color: #0f0e0c; border:5px solid #EEC643;">
                                <center>
                                    <h3 style="color: #af8300;">' . $_POST['occasion'] . '</h3>
                                </center>
                              </div>';
            // $mail->AltBody = $_POST['occasion'];

            if (!$mail->send()) {
                // echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                // echo "<script>alert('Error! Try again'); window.location = 'sendgreetings.php';</script>";
            } else {
                // echo 'Message has been sent';
                echo "<script>alert('Greetings sent successfully!'); window.location = 'index.php#categories';</script>";
            }
        }
        ?>
    </div>
    <?php include("includes/footer.php"); ?>
</body>

</html>