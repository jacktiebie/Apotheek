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


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
    <title>APO instellingen</title>
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
     <h1>Settings</h1>
<?php
} else {
    echo "<a href='login.php'class='hero__cta'>Login Before Accessing Your APO</a>";
}
    ?>
</body>
</html>

