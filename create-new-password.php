<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="login to Apotheek Schut">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <section class="contact__form__container">
        <header>
            <a class="hero__img__a" href="index.php"><img class="hero__img" src="images/logo/logo.svg" alt="Logo"></a>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Service</a></li>
                    <li><a href="#">Voorlichting</a></li>
                    <li><a href="#">Medicijnen</a></li>
                </ul>
            </nav>
            <button class="hero__cta">Login</button>
        </header>
        <div class="contact__container">
        </div>
       <?php
       //get selector and validator tokens from url
       $selector = $_GET['selector'];
       $validator = $_GET['validator'];

       //check if tokens actually exists (extra safety)
       if (empty($selector) || empty($validator)) {
           echo "We could not validate your request";
       } else {
        //check if they are legit tokens (corect type)
        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
        ?>
        <form action="includes/reset-password.inc.php" method="post">
        <input type="hidden" name="selector" value="<?php echo $selector ?>">
        <input type="hidden" name="validator" value="<?php echo $validator ?>">
        <input type="password" name="pwd" placeholder="Enter a new password...">
        <input type="password" name="pwd-repeat" placeholder="Repeat new password...">
        <button type="submit" name="reset-password-submit">Reset Password</button>
    </form>
        <?php 
        }
       }
       
       ?>
    </section>
</body>
</html>