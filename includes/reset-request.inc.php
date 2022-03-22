<?php
//check if they legitly submitted the button
if (isset($_POST["reset-request-submit"])) {

    $selecter = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    //url you send
    $url = "www.jacktiebie.com/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    //expire time
    $expires = date("U") + 1800;

    require 'db_connection.php';

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }


    mysqli_stmt_close($stmt);

    $to = $userEmail;

    $subject = "Reset your password for Apotheek Schut";

    $message = "<p>We received a password reset request. The link to reset your password is below. If you did not make  this request, you can ignore t his e-mail</p>";
    $message .= "<p>Here is your password reset link: </br>";
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers = "From: Apotheek Schut <info@jacktiebie.com>\r\n";
    $headers .= "Reply-To: info@jacktiebie.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: ../reset-password.php?reset=succes");
} else {
    header("Location: ../index.php");
}
