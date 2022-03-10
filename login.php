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
            <form class="contact-form" action="includes/login.inc.php" method="post">
            <input type="text" name="name" placeholder="Username/Email" >
            <input type="password" name="pwd" placeholder="Password..." >
            <button type="submit" name="submit">Log In</button>
        </div>
    </section>
</body>
</html>