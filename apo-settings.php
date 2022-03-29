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

$sql2 = "SELECT * from users_address where users_ID = '$id'";
$lol2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($lol2);


    if (isset($_GET['settingsAddressSubmit'])) {
         // Taking all 5 values from the form data(input)
    $Address =  $_GET['address'];
    $City =  $_GET['city'];
    $PostalCode =  $_GET['postal_code'];
    $Country =  $_GET['country'];
        if ($row2 == null) {
        $sql = "INSERT INTO users_address (users_ID, adress_line, city, postal_code, country)  VALUES ('$id','$Address', 
            '$City','$PostalCode','$Country')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>ADDRESSSDONE</h3>";

        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
    } 
}
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
     
     <h4>Personal Details</h4>
     <?php 
    if ($row2 == null) {
    ?>
        <form action="apo-settings.php" method="get">
            <label for="address">Address</label>
            <input type="textarea" name="address">

            <label for="city">City</label>
            <input type="text" name="city">

            <label for="postal_code">Postal Code</label>
            <input type="textarea" name="postal_code">

            <label for="country">Country</label>
            <input name="country" list="countries">

            <datalist id="countries">
                <option value="Netherlands">
                <option value="England">
                <option value="Germany">
                <option value="France">
                <option value="South Africa">
            </datalist>


            <input type="submit" name="settingsAddressSubmit" value="Check Out">
        </form>

<?php
    } else {
    ?>
    <h1>Your address is:</h1>



    <?php
    }

    
} else {
    echo "<a href='login.php'class='hero__cta'>Login Before Accessing Your APO</a>";
}
    ?>

<form action="includes/delete.inc.php" method="get">
        <button type="submit" name="settingsDeleteSubmit">Delete Account</button>
    </form>
    <a href="reset-password.php">Forgot your password?</a>
</body>
</html>

