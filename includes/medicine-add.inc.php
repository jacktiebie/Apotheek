<?php
require 'db_connection.php';
if (isset($_POST['medicine-submit'])) {
//get input from admin.php (add medicine to database)
$medicineName = $_POST['medicine-name'];
$medicineQuantity = $_POST['medicine-quantity'];
$medicinePrice = $_POST['medicine-price'];
$medicineDesc = $_POST['medicine-desc'];

$sql2 = "SELECT name from medicines where name = '$medicineName'";
$lol2 = mysqli_query($conn, $sql2);
$medicineCheck = mysqli_fetch_array($lol2);


if (empty($medicineName) || empty($medicineQuantity) || empty($medicinePrice) || empty($medicineDesc)) {
echo "Fill in all the Inputs";
header("Location: ../admin.php");
} 
else {
    //check if medicine is not already in database if it is not insert it into the medicine table
        if ($medicineCheck == null) {
            $sql = "INSERT INTO medicines (name, quantity, price, description)  VALUES ('$medicineName','$medicineQuantity', 
                '$medicinePrice','$medicineDesc')";
            if(mysqli_query($conn, $sql)) {
                echo "The medicine is in the database";
                header("Location: ../admin.php");
            } else {
                echo "It did not INSERT";
            }
         
        } else {
         echo "The medicine name is already in the database";
         header("Location: ../admin.php");
        }
    }

} else {
    echo "Something went wrong. Please try again!";
    header("Location: ../admin.php");
}