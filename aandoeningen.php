<?php
require 'includes/db_connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gezondsheid informatie in samenwerking met Thuisarts.nl">
    <link rel="stylesheet" href="css/style.css">
    <title>Lijst van aandoeningen</title>
</head>
<body>
        <header class="header__aandoeningen">
            <a class="hero__img__a" href="index.html"><img class="hero__img" src="images/logo/logo.svg" alt="Logo"></a>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Voorlichting</a></li>
                    <li><a href="#">Medicijnen</a></li>
                </ul>
            </nav>
            <button class="hero__cta">Login</button>
        </header >

        <section class="hero__aandoeningen">
        <div class="hero__aandoeningen__container-1">
        <a href="#">A</a>
        <a href="#">B</a>
        <a href="#">C</a>
        <a href="#">D</a>
        <a href="#">E</a>
        <a href="#">F</a>
        <a href="#">G</a>
        <a href="#">H</a>
        <a href="#">I</a>
        <a href="#">J</a>
        <a href="#">K</a>
        <a href="#">L</a>
        <a href="#">M</a>
        <a href="#">N</a>
        <a href="#">O</a>
        <a href="#">P</a>
        <a href="#">Q</a>
        <a href="#">R</a>
        <a href="#">S</a>
        <a href="#">T</a>
        <a href="#">U</a>
        <a href="#">V</a>
        <a href="#">W</a>
        <a href="#">X</a>
        <a href="#">Y</a>
        <a href="#">Z</a>

        </div>
        <div class="hero__aandoeningen__container-2">
        <h2>Onderwerpen A-Z</h2>
        <br>
        <?php 
        $sql = "SELECT * from aandoeningen ORDER BY naam ASC;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['naam'] . "<br>";
            }
        }

        ?>

        </div>
        </section>



    
</body>
</html>