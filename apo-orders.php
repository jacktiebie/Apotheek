<?php
require 'includes/db_connection.php';
session_start();
if (isset($_SESSION["useruid"])) {
$test = $_SESSION["useruid"];
//get right id from users table
$sql = "SELECT ID FROM users where usersUid = '$test'";
$result = mysqli_query($conn, $sql) or die("BAD SQL");
$row = mysqli_fetch_assoc($result);
$id = $row['ID'];
//get order details using the users_id = $id
$sql = "SELECT * FROM order_details where users_id = '$id'";
$result = mysqli_query($conn, $sql) or die("BAD SQL");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
    <title>APO bestellingen</title>
</head>
<body>
<aside class="APO__aside">
            <a href="#"><img class="profile__picture" src="images/profile/download.jpg" alt="Profile Picture of current user"></a>
            <ul>
                <a href="apo-orders.php">Orders</a>
                <a href="">Invoices</a>
                <a href="apo-help.php">Help</a>
                <a href="apo-settings.php">Settings</a>
                <a class="APO__aside__sign-out" href="includes/logout.inc.php">Sign out</a>
            </ul>
        </aside>
       
<h1 class="apo-orders__title">Bekijk uw gemaakte bestellingen</h1>
<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        

if ((float)$row['shipped'] == 0) {
    $shipped = "<p class='apo-orders__p' class='red'>Not shipped</p>";
} else {
    $shipped = "<ps class='apo-orders__p' class='green'>Shipped</p>";
}
        
        ?>
    
<div class="apo-grid">
    <div class="apo-orders__number">
<h3 class="apo-orders__black">Bestellings nummer</h3>
<p class="apo-orders__p">#<?php echo $row["ID"];?></p>
</div>
<div class="apo-orders__total">
<h3 class="apo-orders__black">Bedrag</h3>
<p class="apo-orders__p">€<?php echo $row["total"];?></p>
</div>
<div class="apo-orders__items">
<h3 class="apo-orders__black">Ordered Items</h3>
</div>
<div class="apo-orders__shipped">
<h3 class="apo-orders__black">Status</h3>
<?php echo $shipped ?>
</div>
<div class="apo-orders__track">
<h3 class="apo-orders__black">Tracking Number</h3>
<p class="apo-orders__p"><?php echo $row["tracking_number"]; ?></p>
</div>
<div class="apo-orders__date">
<h3 class="apo-orders__black">Datum</h3>
<p class="apo-orders__p"><?php echo $row["created_at"]; ?></p>
</div>
</div>

<?php
    } 
}
} else {
    echo "<a href='login.php'class='hero__cta'>Login Before Accessing Your APO</a>";
}
    ?>
</body>
</html>

