<?php
session_start();
//include database connection
include 'includes/db_connection.php';

//create cart if it doesn't exist
if (!(isset($_SESSION['cart']))) {
    $_SESSION['cart'] = array();
} //if cart

$out = "";
//buy
if (isset($_GET['ID'])) {
    $pID = $_GET['ID'];
    $quan = $_GET['quantity'];
    if ($quan > 0 && filter_var($quan, FILTER_VALIDATE_INT)) {
        if (isset($_SESSION['cart'][$pID])) {
            $_SESSION['cart'][$pID] += $quan;
        } else {
            $_SESSION['cart'][$pID] = $quan;
        } //if buy case
    } else {
        echo $out = "Bad Input";
    } //if bad input
} //isset


//clear cart
if(isset($_GET['clear'])) {
    $_SESSION['cart'] = array();
}


//print_r the cart
//echo "<pre>";
//print_r($_SESSION['cart']);
//echo "</pre>";

if (isset($_SESSION["useruid"])) {

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
            <form class="hero__container__form" action="includes/medicijnen.inc.php" method="POST">
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
            //showcase medicines from database
            $query = "SELECT * FROM medicines ORDER BY name ASC";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) { ?>
                    <div>
                        <form method="get" action="medicijnen-winkel.php">
                            <img src="images/paracetamol.png" /><br />
                            <h4 class="shop__right__item__name"><?php echo $row["name"]; ?></h4>
                            <h4 class="shop__right__item__price">$<?php echo $row["price"]; ?></h4>
                            <h4>In stock: <?php echo $row["quantity"]; ?></h4>
                            <input type="text" name="quantity" value="1" class="form-control" />
                            <input type="hidden" name="ID" id="ID" value='<?php echo $row['ID'] ?>'>
                            <input type="submit" name="submit1" style="margin-top:5px;" value="Add to Cart" />
                        </form>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <a href="<?php echo $_SERVER['PHP_SELF'];?>?clear=1">Clear Cart</a>
    </div>


    <?php
    }
     else {
        echo "<a href='login.php'class='hero__cta'>Login Before Accessing The Webshop</a>";
    }
    ?>
</body>

</html>