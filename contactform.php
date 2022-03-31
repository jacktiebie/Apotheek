<?php
include 'includes/db_connection.php';
if (isset($_POST['submit'])) {


// prepare and bind
$stmt = $conn->prepare("INSERT INTO contact (naam, onderwerp, bericht, mail) VALUES (?,?,?,?)");
$stmt->bind_param("ssss", $name, $subject, $message, $mailFrom);

$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];
$stmt->execute();



echo "New records created successfully";

$stmt->close();
$conn->close();
header("Location: index.php?mailsend");
}
?>
