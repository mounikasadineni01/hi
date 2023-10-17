<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gift Store</title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/png">
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

<body style="padding-top: 50px;">
    <!-- Header -->
    <?php
    include 'includes/header.php';
    ?>

    <div id="content">
        <div id="banner_image">
            <div style="margin-top: 26rem; margin-right: 500rem;" class="text-center container">
                <center>
                    <div id="banner_content">
                        <a href="index.php#categories" class="center btn btn-danger btn-lg active" style="margin-top:30px;margin-left:-250px;">Send Surprises</a>
                    </div>
                </center>
            </div>
        </div>
        <section id="about">
            <div style="margin-top:5rem;">
                <center>
                    <h2>ABOUT US</h2>
                </center>
                <p class="container" style="font-size:2.2rem;margin-top:2rem;padding-left:1rem;padding-right:1rem;">When you can't meet folks in person, use this app to surprise them. Our online gift store is comprised of a staff with extensive technological and operational experience, allowing us to offer the most recent surprises and presents at the most competitive prices accessible. In addition to sending gifts, we attempt to make that special event even more wonderful for you and your loved ones by bringing surprise gifts such as cakes, chocolates, teddy bears, and sweets. This Gift Shop is always present where <b style="color: #222;">'Words aren't Enough...'. We understand how essential it is to communicate your emotions with the same passion that your presence would have given to the event.</b> <span style="color: #00004d;">Our motto is to put a smile on your face and to be the best messenger possible.</span> Our delighted consumers determine our success.</p>
            </div>
        </section>
        <div style="margin-top:5rem;" id="categories">
            <center>
                <h2 style="margin-bottom:-40px;">CATEGORIES</h2>
            </center>
            <div style="margin-top:2rem;margin-bottom:5rem;" class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#events">
                            <div class="thumbnail">
                                <img src="img/gifts.jpg" alt="Send Gifts" style="height:240px;">
                                <div class="caption">
                                    <h3>Order Gifts</h3>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="sendgreetings.php">
                            <div class="thumbnail">
                                <img src="img/greet.jpg" alt="Send Greetings" style="height:240px;">
                                <div class="caption">
                                    <h3>Send Greetings</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="planwithus.php">
                            <div class="thumbnail">
                                <img src="img/planwithus.jfif" alt="Plan Surprises" style="height:240px;">
                                <div class="caption">
                                    <h3>Plan Surprises</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact" style="margin-top:1rem;background-color:#1B1E23;">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-6">
                        <h1 style="color:#D4AF37;font-size:1.67rem;">Gift Store</h1>
                        <div class="thumbnail" style="color:aliceblue; background-color:#1B1E23; border:1px solid #1B1E23">
                            <p style="font: normal normal normal 20px;">This Gift Shop is always present where 'Words aren't Enough...' We understand how essential it is to communicate your emotions with the same passion that your presence would have given to the event. </p>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h2 style="color:#D4AF37;font-size:1.7rem;">Connect at</h2>
                        <div class="thumbnail" style="background-color:#1B1E23;color:white;border-color:#1B1E23;">
                            <p style="font-family: 'Arimo', sans-serif;" class="fa fa-google" style="font-size:20px;"> gift.store@gmail.com</p><br>
                            <p style="font-family: 'Arimo', sans-serif;" class="fa fa-phone" style="font-size:20px;"> +91 968745236521</p><br>
                            <a href="#" class="fa fa-facebook" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-decoration: none;margin: 1px 2px;color: white;"></a>
                            <a href="#" class="fa fa-youtube" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-decoration: none;margin: 1px 2px;color: white;"></a>
                            <a href="#" class="fa fa-instagram" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-decoration: none;margin: 1px 2px;color: white;"></a>
                            <a href="#" class="fa fa-linkedin" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-decoration: none;margin: 1px 2px;color: white;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>