<?php 
include 'db_connection.php';

if(isset($_GET['adminUserUpdate'])) {
$id = $_GET['usersID'];
$usersname = $_GET['userName'];
$usersemail = $_GET['userEmail'];
$usersuid = $_GET['userUid'];

$sql = "UPDATE users SET usersName = '$usersname', usersEmail = '$usersemail', usersUid = '$usersuid' WHERE ID = '$id'";
if(!mysqli_query($conn, $sql)) {
    echo "DID NOT WORK";
} else 
{

}
 if(isset($_GET['adminUserDelete'])) {

$id = $_GET['usersID'];

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
    header("Location: admin.inc.php");
} else {
    echo "There was an error" . $sql;
}
} else {
echo "NOT SET";

}
//close connection
}







?>