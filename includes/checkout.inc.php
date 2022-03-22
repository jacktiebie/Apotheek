<?php
SESSION_START();
$_SESSION['cart'];
//start session
$test = $_SESSION["useruid"];

//include database connection
include 'db_connection.php';
if (empty($_SESSION['cart'])) {
} else {



    // Taking all 5 values from the form data(input)
    $Address =  $_GET['address'];
    $City =  $_GET['city'];
    $PostalCode =  $_GET['postal_code'];
    $Country =  $_GET['country'];
    $sql7 = "SELECT * from users where usersUid = '$test';";
    $lol = mysqli_query($conn, $sql7);
    $row = mysqli_fetch_array($lol);
    $id = (int) $row['ID'];
    $name = $row['usersName'];


    $sql2 = "SELECT * from users_address where users_ID = '$id'";
    $lol2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($lol2);








    // Performing insert query execution
    // here our table name is college

        //check if address is not already in database if it is not in the database put the data inside the database
        if ($row2 == null) {
        $sql = "INSERT INTO users_address (users_ID, adress_line, city, postal_code, country)  VALUES ('$id','$Address', 
            '$City','$PostalCode','$Country')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>ADDRESSSDONE</h3>";

        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
    } else {
     
    }
    






    $sql3 = "SELECT * FROM users_address WHERE users_ID = '$id'";
    $lol3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_array($lol3);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <p><?php echo $name ?></p>
        <p>Your order has been confirmed</p>
        <p><?php
            echo $Address; ?> </br>
            <?php echo $City; ?> </br>
            <?php echo $PostalCode; ?> </br>
            <?php echo $Country; ?> </br>
        </p>
    <?php

    $grand = 0;
    $sqlorder = "INSERT INTO order_details (users_id, total)  VALUES ('$id','$grand')";

    if (!mysqli_query($conn, $sqlorder)) {
        echo "ERROR:"
        . mysqli_error($conn);
    } 

    $idDetailed = "SELECT * FROM order_details WHERE users_id = $id AND total = $grand;";
    $idDetailed2 = mysqli_query($conn, $idDetailed);
    $idDetailed3 = mysqli_fetch_array($idDetailed2);
    $idDetailed4 = (int)$idDetailed3['ID'];
    foreach ($_SESSION['cart'] as $key => $val) {
        $sql10 = "SELECT * FROM medicines where ID = '$key'";
        $result = mysqli_query($conn, $sql10) or die("BAD SQL: $sql");
        $row = mysqli_fetch_assoc($result);
        $product = $row['ID'];
        $sub = $val * $row['price'];
        $grand += $sub;
        echo "
        <tr>
            <td>{$row['name']}</td> </br>
            <td>$ {$row['price']}</td> </br>
            <td>$sub</td>
        </tr>
        ";



        $sqlinsert = "INSERT INTO order_items (order_id, product_id, quantity) VALUES  ($idDetailed4,
        $product, 
        $val)";
        if (!mysqli_query($conn, $sqlinsert)) {
            echo "ERROR:"
            . mysqli_error($conn);
        } 
    } //foreach

    echo "Grand Total: $grand";
}
    ?>
    </body>

    </html>