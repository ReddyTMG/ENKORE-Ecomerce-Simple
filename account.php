<?php
session_start();
// if(isset($_SESSION["userid"])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <?php include ("includes/header&nav.php"); ?>
    <article id="login-register-con">
        <div id="login-register-tabs">
            <button id="loginTab" class="active">Login</button>
            <button id="registerTab">Register</button>
        </div>

        <div id="forms">
            <section id="login-con">
                <h1>Login</h1>
                <?php include ("includes/error_message.php"); ?>
                <form id="loginForm" action="includes/loginserver.php" method="post">
                    <input type="email" placeholder="Email" id="loginEmail" name="email" required>
                    <input type="password" placeholder="Password" id="loginPwd" name="pwd"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                        required>

                    <p><button type="submit" class="signin-acc" name="submit">Sign In</button></p>
                </form>
            </section>


            <section id="register-con">
                <h1>Register</h1>
                <form id="registerForm" action="includes/registerserver.php" method="post">
                    <input type="email" placeholder="Email" id="registerEmail" name="email">
                    <input type="password" placeholder="Password" id="registerPwd" name="pwd"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                        required>
                    <div id="message">
                        <h3>Password must contain the following:</h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>

                    <p><button type="submit" name="submit" class="create-acc">Sign Up</button></p>
                </form>
            </section>
        </div>

    </article>
    <script type="text/javascript" src="account.js"></script>
    <script type="text/javascript" src="slider.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="hamburger.js"></script>
    <script type="text/javascript" src="test.js"></script>
    <?php include ("includes/error_log.php"); ?>
    <?php include ("includes/footer.php"); ?>
</body>

</html>