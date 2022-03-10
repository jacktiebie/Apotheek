<?php


//check if submit button is pressed if not do code inside else
if (isset($_POST["submit"])) {


//get data from the url entered by the user
$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["uid"];
$pwd = $_POST["pwd"];
$pwdRepeat = $_POST["pwdrepeat"];

//include database connection
require_once 'db_connection.php';
//include functions.inc.php
require_once 'functions.inc.php';

if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=emptyinput");
    exit();
}
if (invalidUid($username) !== false) {
    header("location: ../signup.php?error=invaliduid");
    exit();
}
if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
    exit();
}

if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=passwordmatch");
    exit();
}
if (uidExists($conn, $username, $email) !== false) {
    header("location: ../signup.php?error=usernametaken");
    exit();
}

createUser($conn, $name, $email, $username, $pwd);




} else {
    //if submit button is not pressed go to signup.php
    header("location: ../signup.php");
    exit();
}