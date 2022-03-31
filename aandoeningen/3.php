<?php
require '../includes/db_connection.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gezondsheid informatie in samenwerking met Thuisarts.nl">
    <link rel="stylesheet" href="../css/style.css">
    <title>Lijst van aandoeningen</title>
</head>

<body>
    <header class="header__aandoeningen">
        <a class="hero__img__a" href="index.php"><img class="hero__img" src="images/logo/logo.svg" alt="Logo"></a>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Voorlichting</a></li>
                <li><a href="#">Medicijnen</a></li>
            </ul>
        </nav>
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<button class='hero__cta'>APO</button>";
        } else {
            echo "<button class='hero__cta'>Login</button>";
        }
        ?>
    </header>

    <section class="hero__aandoeningen__lijst">
        <div class="hero__aandoeningen__container-2">
            <h2>Aambeien</h2>
            <hr class="hero__aandoeningen__container-2__line">
          
        <ul class="b-2">
        <li>Lorem Ipsum Lorem Ipsum</li>
        <li>Lorem Ipsum Lorem Ipsum</li>
        <li>Lorem Ipsum Lorem Ipsum</li>
        <li>Lorem Ipsum Lorem Ipsum</li>
        <li>Lorem Ipsum Lorem Ipsum</li>
        </ul>
        </div>
        <div class="hero__aandoeningen__container-3">
            <h3>Zie ook</h3>
            <ul>
                <li><a class="container-3-a" href="">Lorem Ipsum</a></li>
                <li><a class="container-3-a" href="">Lorem Ips</a></li>
                <li><a class="container-3-a" href="">Lorem </a></li>
            </ul>
        </div>
    </section>


