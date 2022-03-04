<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Form</title>
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
            <p>CONTACT FORM</p>
            <form class="contact-form" action="contactform.php" method="post"> 
                <input class="contact-input" type="text" name="name" placeholder="Volledige naam"> </br>
                <input class="contact-input" type="text" name="mail" placeholder="Your e-mail"> </br>
                <input class="contact-input" type="text" name="subject" placeholder="Onderwerp"> </br>
                <textarea class="contact-input" name="message" placeholder="Bericht"></textarea> </br>
                <button class="contact-submit" type="submit" name="submit">Verstuur Bericht</button>
            </form>
        </div>
    </section>


</body>

</html>