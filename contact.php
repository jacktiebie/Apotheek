<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <p>CONTACT FORM</p>
    <form class="contact-form" action="contactform.php" method="post">
        <input type="text" name="name" placeholder="Volledige naam">
        <input type="text" name="mail" placeholder="Your e-mail">
        <input type="text" name="subject" placeholder="Onderwerp">
        <textarea name="message" placeholder="Bericht"></textarea>
        <button type="submit" name="submit">Verstuur Bericht</button>
    </form>
</body>
</html>