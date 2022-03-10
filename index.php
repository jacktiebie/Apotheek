<?php
require 'includes/db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Apotheek Schut</title>
    <meta name="description" content="Apotheek website Schut">
</head>

<body>
    <section class="hero">
        <?php  include_once 'header.php' ?>
        <div class="hero__container">
            <h1 class="hero__container__title">Apotheek Schut zorgt voor uw medicijnvoorschriften</h1>
            <p class="hero__container__subtitle">We hebben alle medicijnen die uw arts heeft voorgeschreven voor uw gezondheid bovendien kunnen we ze bij
                u bezorgen</p>
            <form class="hero__container__form" action="#" method="GET">
                <input class="hero__container__form-input" placeholder="Vind medicijnen in onze webshop" type="text" name="query" />
                <input class="hero__container__form-search" type="submit" value="Search" />
            </form>
        </div>
    </section>

    <section class="cards">
        <div class="cards__header">
            <h2>De juiste apotheek voor u</h2>
            <hr class="cards__line">
            <p class="cards__subtitle">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem da poru la</p>
        </div>
        <div class="cards__grid__container">
            <div class="cards__grid-item">
                <img src="images/card__logo__1.png" alt="#">
                <h3>Contact Formulier</h3>
                <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                <a href="">Neem contact op -></a>
            </div>
            <div class="cards__grid-item">
                <img src="images/card__logo__1.png" alt="#">
                <h3>Contact Formulier</h3>
                <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                <a href="">Neem contact op -></a>
            </div>
            <div class="cards__grid-item">
                <img src="images/card__logo__1.png" alt="#">
                <h3>Contact Formulier</h3>
                <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                <a href="">Neem contact op -></a>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="news__header">
            <h2>Nieuws</h2>
            <hr class="news__line">
        </div>
        <div class="news__grid">
            <div class="section__grid__1">
                <?php
                $sql = "SELECT subject, img, date, title, subtitle FROM news WHERE id = 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {



                ?>
                        <p class="news__subject__1"><?php echo $row['subject']; ?></p>
                        <?php echo '<img class="news__img__1" src="' . $row['img'] . '"></img>'; ?>
                        <p class="news__date"><?php echo $row['date']; ?></p>
                        <h3 class="news__title__1"><?php echo $row['title']; ?> </h3>
                        <p class="news__subtitle__1"><?php echo $row['subtitle']; ?></p>

                <?php }
                }
                ?>
            </div>
            <div class="section__grid__2">

                <?php $sqlOne = "SELECT subject, img, date, title, subtitle FROM news WHERE id = 2";
                $resultOne = $conn->query($sqlOne);

                if ($resultOne->num_rows > 0) {
                    // output data of each row
                    while ($rowOne = $resultOne->fetch_assoc()) {



                ?>
                        <p class="news__subject__1"><?php echo $rowOne['subject']; ?></p>
                        <?php echo '<img class="news__img__1" src="' . $rowOne['img'] . '"></img>'; ?>
                        <p class="news__date"><?php echo $rowOne['date']; ?></p>
                        <h3 class="news__title__1"><?php echo $rowOne['title']; ?></h3>
                        <p class="news__subtitle__1"><?php echo $rowOne['subtitle']; ?></p>


                <?php }
                } ?>
            </div>
            <div class="section__grid__3">
                <?php
                $sqlTwo = "SELECT subject, img, date, title, subtitle FROM news WHERE id = 3";
                $resultTwo = $conn->query($sqlTwo);

                if ($resultTwo->num_rows > 0) {
                    // output data of each row
                    while ($rowTwo = $resultTwo->fetch_assoc()) {


                ?>
                        <p class="news__subject__1"><?php echo $rowTwo['subject']; ?></p>
                        <?php echo '<img class="news__img__1" src="' . $rowTwo['img'] . '"></img>'; ?>
                        <p class="news__date"><?php echo $rowTwo['date']; ?></p>
                        <h3 class="news__title__1"><?php echo $rowTwo['title']; ?></h3>
                        <p class="news__subtitle__1"><?php echo $rowTwo['subtitle']; ?></p>
                <?php }
                } ?>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="footer__grid">
            <div class="footer__grid__1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4825.944487546979!2d4.791967378383966!3d52.7868086194622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47cf4e258ca8ccdb%3A0x3272ca6e663a9bac!2sROC%20Kop%20van%20Noord-Holland!5e0!3m2!1sen!2snl!4v1646045294933!5m2!1sen!2snl" width="400" height="280" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="footer__grid__2">
                <h3>Locatie</h3>
                <p>Hofstraat 13</br> 1741 CD Schagen</br> Noord-Holland</p>
            </div>
            <div class="footer__grid__3">
                <h3>Openingstijden</h3>
                <p>Ma: 6-8</br> Di: 6-8</br> Wo: 6-8</br> Do: 6-8</br> Vrij: 6-8</br> Za: 6-8</br> Zo: 6-8</p>
            </div>
            <div class="footer__grid__4">
                <h3>Social Media</h3>
                <a href="facebook.com">Facebook</a></br>
                <a href="twitter.com">Twitter</a></br>
                <a href="linkedin.com">LinkedIn</a>
            </div>
        </div>
        <p class="copyright">Owned by Apotheek Schut. copyright©</p>
    </section>
</body>
<?php


?>
<script src="script.js"></script>
</html>