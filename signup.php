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
            <p>LOGIN</p>
            <form class="contact-form" action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Full name...">
                <input type="text" name="email" placeholder="Email...">
                <input type="text" name="uid" placeholder="Username...">
                <input type="password" name="pwd" placeholder="Password...">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <a href="reset-password.php">Forgot your password?</a>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET['error'] == "emptyinput") {
                echo "<p>Vul alle velden in</p>";
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p>Kies een juiste gebruikersnaam</p>";
            } else if ($_GET["error"] == "invalidemail") {
                echo "<p>Kies een juiste email</p>";
            } else if ($_GET["error"] == "passwordmatch") {
                echo "<p>Wachtwoorden komen niet overeen</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Iets ging fout! Probeer het opnieuw</p>";
            } else if ($_GET["error"] == "usernametaken") {
                echo "<p>Gebruikersnaam is al in gebruik</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p>U bent ingelogd</p>";
            } else if ($_GET["newpwd"] == "passwordupdated") {
                echo "<p>Your password is updated!</p>";
            }
        }
        ?>
    </section>
</body>

</html>