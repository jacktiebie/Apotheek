<?php
require 'includes/db_connection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="vind informatie over ziekte, gezondheid en aandoeningen">
    <link rel="stylesheet" href="css/style.css">
    <title>Aandoeningen</title>
</head>

<body>
    <section class="hero__aandoeningen">
    <?php  include_once 'header.php' ?>
        <div class="hero__container">
            <h1 class="hero__container__title">Betrouwbare informatie over ziekte en gezondheid</h1>
            <p class="hero__container__subtitle">In samenwerking met Thuisarts.nl bieden wij u </br> gezondheidsinormatie. </p>
            <form class="hero__container__form" action="aandoeningen.inch.php" method="POST">
                <input class="hero__container__form-input" placeholder="Vind medicijnen in onze webshop" type="text" name="aandoeningen-query" />
                <input class="hero__container__form-search" type="submit" name="aandoeningen-submit" value="Search" />
            </form>
        </div>
    </section>
</body>

</html>