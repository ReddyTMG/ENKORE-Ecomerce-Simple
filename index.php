<?php
include ("includes/session_config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enkore Kpop Store</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <?php include ("includes/header&nav.php"); ?>

    <article>
        <div class="slide-con">
            <div class="slide">
                <img src="picture/home/lesserafim-slide.png" alt="LE SSERAFIM">
            </div>

            <div class="slide">
                <img src="picture/home/newjeans-slide.png" alt="New Jeans">
            </div>
        </div>

        <div class="dot-con">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>

        <br>
        <section class="product">
            <h1>Best Selling</h1>
            <div class="pd-wrap">
                <img src="picture/home/back.png" alt="Back Button" id="back-button">
                <div class="product-con">
                    <div class="products-container">
                        <a href="">
                            <img src="picture/newjeans/newjeans/album.jpg" alt="New Jeans (Weverse Albums ver.)">
                            <div class="product-name">
                                <p>LE SSERAFIM - 3rd Mini Album EASY (COMPACT Ver.) [Hong Eunchae ver.]</p>
                            </div>
                            <div class="product-price">
                                <p>RM 70.00</p>
                            </div>
                        </a>
                        <!-- <button class="cart-button">Add To Cart</button> -->
                        <!-- <form method="post" action="">
                            <p><input type='submit' class="cart-button" name="redirectButton" value="Add To Cart"></p>
                        </form> -->
                        <form action="" method="post">
                            <button type="button" class="cart-button" id="openbtn" name="redirectButton">Add to cart</button>

                        </form>
                        <?php
                        // Check if user is not logged in and button is clicked
                        if (!isset ($_SESSION['userid'])) {
                            if (isset ($_POST['redirectButton'])) {
                                // Redirect to the login page
                                header("location:account.php?error=please log in first");
                                exit();
                            }
                        }
                        ?>
                    </div>
                    <div class="popup" id="popup">
                        <h2>Thank You!</h2>
                        <p>You have successfully add this item to cart!</p>
                        <button id="closebtn">OK</button>
                    </div>

                    <div class="products-container">
                        <a href="">
                            <img src="picture/newjeans/newjeans/album.jpg" alt="New Jeans (Weverse Albums ver.)">
                            <div class="product-name">
                                <p>LE SSERAFIM - 3rd Mini Album EASY (COMPACT Ver.) [Hong Eunchae ver.]</p>
                            </div>
                            <div class="product-price">
                                <p>RM 70.00</p>
                            </div>
                        </a>
                        <button class="cart-button">Add To Cart</button>
                    </div>

                    <div class="products-container">
                        <a href="">
                            <img src="picture/newjeans/newjeans/album.jpg" alt="New Jeans (Weverse Albums ver.)">
                            <div class="product-name">
                                <p>LE SSERAFIM - 3rd Mini Album EASY (COMPACT Ver.) [Hong Eunchae ver.]</p>
                            </div>
                            <div class="product-price">
                                <p>RM 70.00</p>
                            </div>
                        </a>
                        <button class="cart-button">Add To Cart</button>
                    </div>

                    <div class="products-container">
                        <a href="">
                            <img src="picture/newjeans/newjeans/album.jpg" alt="New Jeans (Weverse Albums ver.)">
                            <div class="product-name">
                                <p>LE SSERAFIM - 3rd Mini Album EASY (COMPACT Ver.) [Hong Eunchae ver.]</p>
                            </div>
                            <div class="product-price">
                                <p>RM 70.00</p>
                            </div>
                        </a>
                        <button class="cart-button">Add To Cart</button>
                    </div>

                    <div class="products-container">
                        <a href="">
                            <img src="picture/newjeans/newjeans/album.jpg" alt="New Jeans (Weverse Albums ver.)">
                            <div class="product-name">
                                <p>LE SSERAFIM - 3rd Mini Album EASY (COMPACT Ver.) [Hong Eunchae ver.]</p>
                            </div>
                            <div class="product-price">
                                <p>RM 70.00</p>
                            </div>
                        </a>
                        <button class="cart-button">Add To Cart</button>
                    </div>

                    <div class="products-container">
                        <a href="">
                            <img src="picture/newjeans/newjeans/album.jpg" alt="New Jeans (Weverse Albums ver.)">
                            <div class="product-name">
                                <p>LE SSERAFIM - 3rd Mini Album EASY (COMPACT Ver.) [Hong Eunchae ver.]</p>
                            </div>
                            <div class="product-price">
                                <p>RM 70.00</p>
                            </div>
                        </a>
                        <button class="cart-button">Add To Cart</button>
                    </div>

                    <div class="products-container">
                        <a href="">
                            <img src="picture/newjeans/newjeans/album.jpg" alt="New Jeans (Weverse Albums ver.)">
                            <div class="product-name">
                                <p>LE SSERAFIM - 3rd Mini Album EASY (COMPACT Ver.) [Hong Eunchae ver.]</p>
                            </div>
                            <div class="product-price">
                                <p>RM 70.00</p>
                            </div>
                        </a>
                        <button class="cart-button">Add To Cart</button>

                    </div>

                    <div class="products-container">
                        <a href="">
                            <img src="picture/newjeans/newjeans/album.jpg" alt="New Jeans (Weverse Albums ver.)">
                            <div class="product-name">
                                <p>LE SSERAFIM - 3rd Mini Album EASY (COMPACT Ver.) [Hong Eunchae ver.]</p>
                            </div>
                            <div class="product-price">
                                <p>RM 70.00</p>
                            </div>
                        </a>
                        <button class="cart-button">Add To Cart</button>
                    </div>

                    <div class="products-container">
                        <a href="">
                            <img src="picture/newjeans/newjeans/album.jpg" alt="New Jeans (Weverse Albums ver.)">
                            <div class="product-name">
                                <p>LE SSERAFIM - 3rd Mini Album EASY (COMPACT Ver.) [Hong Eunchae ver.]</p>
                            </div>
                            <div class="product-price">
                                <p>RM 70.00</p>
                            </div>
                        </a>
                        <button class="cart-button">Add To Cart</button>
                    </div>
                </div>
                <img src="picture/home/next.png" alt="Next Button" id="next-button">
            </div>
        </section>
    </article>

    <script type="text/javascript" src="slider.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="hamburger.js"></script>
    <?php include ("checkLogin.php"); ?>
    <?php include ("includes/footer.php"); ?>
</body>

</html>