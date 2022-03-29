<?php
//script to delete all information about user and their orders in the database

//database connection
require 'db_connection.php';

//start session
SESSION_START();
$test = $_SESSION["useruid"];

//get id from user
$sql = "SELECT ID FROM users where usersUid = '$test'";
$result = mysqli_query($conn, $sql) or die("BAD SQL");
$row = mysqli_fetch_assoc($result);
$id = $row['ID'];

if (isset($_GET['settingsDeleteSubmit'])) {

//delete order items
$sqlItems = "SELECT ID FROM order_details WHERE users_id = $id;";
$resultItems = mysqli_query($conn, $sqlItems) or die("BAD SQL" . $sqlItems);
if (mysqli_num_rows($resultItems) > 0) {
    while ($row = mysqli_fetch_array($resultItems)) { 
  $idItems = $row['ID'];
  $sql = "DELETE FROM order_items WHERE order_id = $idItems";
  echo "COMPLETED !";
        
    } 
}
    

//drop the constraint

//delete payment ( DONT HAVE PAYMENT YET )

//dete order details
$sql = "DELETE FROM order_details WHERE users_id = $id";
mysqli_query($conn, $sql) or die ("BAD SQL" . $sql);

//delete users_address
$sql = "DELETE FROM users_address WHERE users_ID = $id";
mysqli_query($conn, $sql) or die ("BAD SQL" . $sql);





//sql to delete the correct recod
$sql = "DELETE FROM users WHERE usersUid = '$test'";

//dete from users
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    session_destroy();
    header("Location: ../index.php");
} else {
    echo "There was an error" . $sql;
}
} else {
    header("Location: ../apo-settings.php");

}
//close connection


