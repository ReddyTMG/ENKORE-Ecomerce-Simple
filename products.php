<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NewJeans Shop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php include("includes/header&nav.php"); ?>
    <article>
        <div class="products-con">
            <div class="products-sec1">
            <img src="picture/newjeans/group-photo.jpg" alt="Newjeans Group Photo">
            </div>

            <div class="products-sec2">
                <p>4 Products</p>
                <label class="sortby">
                    Sort By
                    <select name="sort">
                        <option value="sort1">Alphabetical A-Z</option>
                        <option value="sort1">Alphabetical Z-A</option>
                        <option value="sort1">Highest Price</option>
                        <option value="sort1">Lowest Price</option>
                    </select>
                </label>
            </div>

            <div class="products-sec3">
                <!-- Product 1 -->
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

                <!-- Product 2 -->
                <div class="products-container">
                    <a href="">
                    <img src="picture/newjeans/newjeans yearbook 22-23/album.jpg" alt="NewJeans Yearbook 22-23">
                        <div class="product-name">
                            <p>NewJeans Yearbook 22-23</p>
                        </div>
                        <div class="product-price">
                            <p>RM 300.00</p>
                        </div>
                    </a>
                    <button class="cart-button">Add To Cart</button>
                </div>

                <!-- Product 3 -->
                <div class="products-container">
                    <a href="">
                    <img src="picture/newjeans/newjeans-2024 season_s greetings/album.jpg" alt="NewJeans - 2024 Season's Greetings [24/7 With NEWJEANS]">
                        <div class="product-name">
                            <p>NewJeans - 2024 Season's Greetings [24/7 With NEWJEANS]</p>
                        </div>
                        <div class="product-price">
                            <p>RM 250.00</p>
                        </div>
                    </a>
                    <button class="cart-button">Add To Cart</button>
                </div>

                <!-- Product 4 -->
                <div class="products-container">
                    <a href="">
                    <img src="picture/newjeans/newjeans-get up/album.jpg" alt="NewJeans - Get Up 2nd EP The POWERPUFF GIRLS X NJ BOX Ver.">
                        <div class="product-name">
                            <p>NewJeans - Get Up 2nd EP The POWERPUFF GIRLS X NJ BOX Ver.</p>
                        </div>
                        <div class="product-price">
                            <p>RM 90.00</p>
                        </div>
                    </a>
                    <button class="cart-button">Add To Cart</button>
                </div>
            </div>
        </div>
    </article>
	<?php include("includes/footer.php"); ?>
</body>
</html>