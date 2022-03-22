<?php

if (isset($_POST["submit"])) {
    $usrname = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'db_connection.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($usrname, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $usrname, $pwd);
} else {
    header("loction: ../login.php");
    exit();
}
