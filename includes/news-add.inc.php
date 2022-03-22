<?php
require 'db_connection.php';
if (isset($_POST['news-submit'])) {
//get input from admin.php (add medicine to database)
$newsImage = $_POST['news-image'];
$newsSubject = $_POST['news-subject'];
$newsDate = $_POST['news-date'];
$newsTitle = $_POST['news-title'];
$newsSubtitle = $_POST['news-subtitle'];

//check if inputs are not empty
if (empty($newsImage) || empty($newsSubject) || empty($newsDate) || empty($newsTitle) || empty($newsSubtitle)) {
echo "Fill in all the Inputs";
header("Location: ../admin.php");
} 
else {
            $sql = "INSERT INTO news (img, subject, date, title, subtitle)  VALUES ('$newsImage','$newsSubject', 
                '$newsDate','$newsTitle', '$newsSubtitle')";
            if(mysqli_query($conn, $sql)) {
                echo "Your news article is in the database";
                header("Location: ../admin.php");
            } else {
                echo "It did not INSERT";
            }
         
        } 
    
}