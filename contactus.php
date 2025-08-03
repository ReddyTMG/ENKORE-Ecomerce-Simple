<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php include("includes/header&nav.php"); ?>
    <article id="contact-us-container">
        <div class="contact-text">
            <h1>Get In Touch</h1>
            <h2>Let us know how can we help by completing the form. We typically respond in 1-2 business days.</h2>
        </div>

        <div class="contact-form">
            <form name="contact-us" action="process.php" method="post">
                <input type="text" placeholder="Name" id="name" name="name" required="required">
                <input type="email" placeholder="Email" id="email" name="email" required="required">
                <input type="number" placeholder="Phone Number" id="phone_number" name="phone number" required="required">
                <textarea placeholder="Message" id="message" name="message" required="required"></textarea>

                <button type="submit" class="submit">Submit Now</button>
            </form>
        </div>
    </article>
	<?php include("includes/footer.php"); ?>
</body>
</html>