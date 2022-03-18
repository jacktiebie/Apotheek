<?php
//include database connection
include 'includes/db_connection.php';


  

?>
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
            <form class="hero__container__form" action="includes/medicijnen.inc.php" method="GET">
                <input class="hero__container__form-input" placeholder="Vind medicijnen in onze webshop" type="text" name="medicijnen-query" />
                <input class="hero__container__form-search" name="medicijnen-submit" type="submit" value="Search" />
            </form>
        </div>
    </section>
    <div class="shop__grid">
        <div class="shop__left">
            <img src="images/placeholder_1.png" alt="">
        </div>
        <div class="shop__right">
            <?php

            //creating an array to put in the medicines ID?
$shoppingCart = [];


if (!isset($_POST["submit1"])) {
} else {
    echo var_dump($shoppingCart);

}

            $query = "SELECT * FROM products ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <div>
                        <form method="post" action="<?php array_push($shoppingCart, "banana", "orange"); ?>">
                            <img src="images/paracetamol.png"/><br />

                            <h4 class="shop__right__item__name"><?php echo $row["name"]; ?></h4>

                            <h4 class="shop__right__item__price">$ <?php echo $row["price"]; ?></h4>
                        
                            <input type="text" name="quantity" value="1" class="form-control" />

                            <input type="submit" name="submit1" style="margin-top:5px;" value="Add to Cart" />

                        </form>
                    </div>
            <?php
                }
            } 
            ?>
        </div>
    </div>

    
</body>

</html>