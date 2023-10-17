<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
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
    include 'includes/check-if-added.php';
    ?>
    <div class="container" id="content">
        <div class="jumbotron home-spacer" id="products-jumbotron">
            <center>
                <h1>GIFT STORE</h1>
        </div>
        <hr>
        <div id="gifts">
            <h2>Send Gifts to your loved ones!</h2> <br>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/birthday.jpg" alt="Birthday Gifts" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Birthday Gifts</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae consequuntur perspiciatis sit. Quasi, nulla?</p> -->
                            <p>Price: Rs.1999.99 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-danger btn-block">Buy now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                    <div>
                                        <p>Quantity:
                                            <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                            <input id="quantity1" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                            <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                        </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=1&quantity='+document.getElementById('quantity1').value" name="add" value="add" class="btn btn-block btn-danger buy">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/anniversary.jpg" alt="Anniversary Gifts" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Anniversary Gifts</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, quae repellendus voluptas aliquam illum deleniti.</p> -->
                            <p>Price: 2499.99 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-danger btn-block">Buy now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(2)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                    <div>
                                        <p>Quantity:
                                            <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                            <input id="quantity2" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                            <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                        </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=2&quantity='+document.getElementById('quantity2').value" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/valentine.jpg" alt="Valentine Gifts" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Valentine Gifts</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto facilis eveniet, sapiente nostrum qui ut.</p> -->
                            <p>Price: 4999.99</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-danger btn-block">Buy now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(3)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                    <div>
                                        <p>Quantity:
                                            <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                            <input id="quantity3" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                            <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                        </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=3&quantity='+document.getElementById('quantity3').value" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/baby.jpg" alt="Baby Gifts" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Baby Gifts</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora omnis, culpa velit voluptatum facere id.</p> -->
                            <p>Price:999.99 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-danger btn-block">Buy now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(4)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                    <div>
                                        <p>Quantity:
                                            <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                            <input id="quantity4" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                            <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                        </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=4&quantity='+document.getElementById('quantity4').value" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/cake.jpg" alt="Order a Cake" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Order a Cake</h3>
                            <!-- <p style="padding-top:20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quibusdam voluptatibus perferendis unde voluptatum est?</p> -->
                            <p>Price: 499.99 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-danger btn-block">Buy now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(5)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                    <div>
                                        <p>Quantity:
                                            <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                            <input id="quantity5" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                            <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                        </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=5&quantity='+document.getElementById('quantity5').value" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/flowers.jpg" alt="Flower Bouquets & Baskets" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Flower Bouquets & Baskets</h3>
                            <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita fugit repudiandae vel eligendi, asperiores dicta!</p> -->
                            <p>Price:1099.99 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-danger btn-block">Buy now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(6)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                    <div>
                                        <p>Quantity:
                                            <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                            <input id="quantity6" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                            <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                        </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=6&quantity='+document.getElementById('quantity6').value" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/corporate.jpg" alt="Corporate Gifts" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Corporate Gifts</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quisquam qui suscipit corrupti similique unde.</p> -->
                            <p>Price:1299.99 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-danger btn-block">Buy now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(7)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                    <div>
                                        <p>Quantity:
                                            <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                            <input id="quantity7" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                            <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                        </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=7&quantity='+document.getElementById('quantity7').value" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/combo.jpg" alt="Combo Pack" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Combo Pack</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, quibusdam perspiciatis error praesentium dolores exercitationem.</p> -->
                            <p>Price: 4999.99</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-danger btn-block">Buy now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(8)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                    <div>
                                        <p>Quantity:
                                            <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                            <input id="quantity8" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                            <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                        </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=8&quantity='+document.getElementById('quantity8').value" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/chocolates.jpg" alt="Chocolate Pack" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Chocolate Pack</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, quibusdam perspiciatis error praesentium dolores exercitationem.</p> -->
                            <p>Price: 1699.99</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-danger btn-block">Buy now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(9)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                    <div>
                                        <p>Quantity:
                                            <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                            <input id="quantity9" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                            <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                        </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=9&quantity='+document.getElementById('quantity9').value" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
<script>
    $(".btn1").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        var newVal = parseFloat(oldValue) + 1;
        $button.parent().find("input").val(newVal);
    });
    $(".btn2").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if (oldValue > 2) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 1;
        }
        $button.parent().find("input").val(newVal);
    });
</script>

</html>