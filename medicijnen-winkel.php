<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Webshop voor het kopen van diverse medicijnen">
    <link rel="stylesheet" href="css/style.css">
    <title>Medicijnen Webshop</title>
</head>
<body>
    <section class="shop">
   <?php include_once 'header.php'; ?>
   <div class="shop__container">
        <h2>Vind de juiste medicijnen voor u</h2>
        <form class="hero__container__form" action="#" method="GET">
                <input class="hero__container__form-input" placeholder="Vind medicijnen in onze webshop" type="text" name="query" />
                <input class="hero__container__form-search" type="submit" value="Search" />
            </form>
    </div>
    <div class="shop__left">

    </div>
    <div class="shop__right">
    <div class="shop__right__item">
        <img src="images/paracetamol.png" alt="">
        <h3>Paracetamol 250mg</h3>
        <p>$49.50</p>
        <p>1001 in stock</p>
        <a href=""><img src="images/shop_cart.png" alt=""></a>
    </div>
    <div class="shop__right__item">
        <img src="images/paracetamol.png" alt="">
        <h3>Paracetamol 250mg</h3>
        <p>$49.50</p>
        <p>1001 in stock</p>
        <a href=""><img src="images/shop_cart.png" alt=""></a>
    </div>
    <div class="shop__right__item">
        <img src="images/paracetamol.png" alt="">
        <h3>Paracetamol 250mg</h3>
        <p>$49.50</p>
        <p>1001 in stock</p>
        <a href=""><img src="images/shop_cart.png" alt=""></a>
    </div>
    </div>
   </section>
</body>
</html>