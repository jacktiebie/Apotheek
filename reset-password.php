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
        <h1>Reset your password</h1>
        <p>An e-mail will be send to you with instructions on how to reset your password.</p>
        <form action="includes/reset-request.inc.php" method="post">
        <input type="text" name="email" placeholder="Enter your e-mail address...">
        <button type="submit" name="reset-request-submit">Receive new password by e-mail.</button>
        </form>
        <?php
        if (isset($_GET["reset"])) {
       if ($_GET['reset'] == "succes") {
        echo "<p>Check your e-mail acount!</p>";
       } else {
           echo "<p>There was an mistake</p>";
       }
       }
       ?>
    </section>
</body>
</html>