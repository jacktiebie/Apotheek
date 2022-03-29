<?php
//database connection
include 'includes/db_connection.php';

//start session
SESSION_START();


//total orders in the last 24 hours
$sql = "SELECT ID from order_details WHERE created_at >= NOW() - INTERVAL 1 DAY;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$totalOrders = mysqli_num_rows($result);

$i = 0;
//total sales in the last 24 hours
$sql = "SELECT * from order_details WHERE created_at >= NOW() - INTERVAL 1 DAY;";
//perform the query inside the database
$result = mysqli_query($conn, $sql);
//result inside an array
while($row = mysqli_fetch_assoc($result)) {
    $i += $row['total'];
}


//llast orders




   





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Control Panel</title>
</head>
<body>
        <aside class="admin__aside">
            <a href="index.php"><img class="admin-logo" src="images/logo/logo_black.png" alt="Profile Picture of current user"></a>
            <ul>
            <a href="admin.php">Dashboard</a>
                <a href="admin.php">Klanten</a>
                <a href="admin.php">Bestellingen</a>
                <a href="admin.php">Analyses</a>
                <a href="admin.php">Messages</a>
                <a href="admin-products.php">Medicijnen</a>
                <a href="admin-news.php">Nieuws</a>
                <a href="admin-settings.php">Settings</a>
            </ul>
            <a class="admin-sign-out" href="includes/logout.inc.php">Sign out</a>
        </aside>
        <div class="admin-background">
        <div class="admin-top-flex">
    <h1 class="admin-top-title">Dashboard</h1>
    <div class="admin-top-flex-1">
    <p class="admin-top-welcome">Hey, <span class="admin-top-name">Daniel</span></p>
    <p class="admin-top-function">Admin</p>
    </div>
    <img class="admin-top-user" src="images/profile/profile-3.jpg" alt="Photo of admin">
    </div>
    <div class="admin-grid">
        <div class="admin-grid-sales">
        <img class="admin-grid-img"  src="images/admin-sales.png" alt="">
        <p class="admin-grid-title">Total Sales</p>
        <h3 class="admin-grid-php">$<?php echo $i ?></hs3>
        <p class="admin-grid-subtitle">Last 24 hours</p>
        </div>
        <div class="admin-grid-orders">
            <img class="admin-grid-img" src="images/admin-cart.png" alt="">
            <p class="admin-grid-title">Total Orders</p>
            <h3 class="admin-grid-php"><?php echo $totalOrders ?></h3>
            <p class="admin-grid-subtitle">Last 24 hours</p>
        </div>
        <div class="admin-grid-messages">
            <img class="admin-grid-img" src="images/admin-chat.png" alt="">
            <p class="admin-grid-title">Total Messages</p>
            <h3 class="admin-grid-php">5630</h3>
            <p class="admin-grid-subtitle">Last 24 hours</p>
        </div>
        <div class="admin-grid-updates">
            <div class="admin-grid-updates-user">
            <div class="admin-grid-updates-flex">
            <img class="admin-grid-updates-picture"src="images/profile/profile-1.jpg" alt="">
            <p class="admin-grid-updates-msg"><span class="admin-username">Mike Tyson </span>received his order of medicines 250mg</p>
</div>
            <p class="admin-grid-updates-time">2 minutes ago</p>
            </div>
            <div class="admin-grid-updates-user">
                <div class="admin-grid-updates-flex">
            <img class="admin-grid-updates-picture" src="images/profile/profile-2.jpg" alt="">
            <p class="admin-grid-updates-msg"><span class="admin-username">Mike Tyson </span>received his order of medicines 250mg</p>
            </div>
            <p class="admin-grid-updates-time">2 minutes ago</p>
            </div>
        </div>
        <div class="admin-grid-orders-2">
        <table class="admin-table">
            <tr>
                <th>ID</th>
                <th>Total</th>
                <th>Shipped</th>
                <th>Created At</th>
            </tr>
        <?php
            $sql = "SELECT * FROM order_details ORDER BY ID DESC LIMIT 10";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) { ?>
    
    <tr class="admin-tr">
                <td><?php echo $row['ID'] ?></td>
                <td><?php echo $row['total'] ?></td>
                <td><?php echo $row['shipped'] ?></td>
                <td><?php echo $row['created_at'] ?></td>
            </tr>
            <?php
}
?>


        </table>
        </div>
        <div class="admin-grid-add">
        <div>+  Add product</div>
        <div>+  Add niewsbericht</div>
        <div>+  Add customer</div>
        <div>+  Send invoice</div>
        </div>
    </div>
    </div>
</body>
</html>