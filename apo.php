<?php
require 'includes/db_connection.php';
session_start();
if (isset($_SESSION["useruid"])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>APO</title>
    </head>

    <body>
        <aside class="APO__aside">
            <a href="">Logo</a>
            <ul>
                <a href="apo-orders.php">Orders</a>
                <a href="">Invoices</a>
                <a href="apo-help.php">Help</a>
                <a href="apo-settings.php">Settings</a>
            </ul>
            <a href="">Sign out</a>
        </aside>
    <?php
} else {
    echo "<a href='login.php'class='hero__cta'>Login Before Accessing Your APO</a>";
}
    ?>
    </body>

    </html>