<?php


//check if inputs are empty
function emptyInputSignup($name, $email, $usrname, $pwd, $pwdRepeat) {
    if (empty($name) || empty($email) || empty($usrname) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } 
    else {
    $result = false;
    }
return $result;
}

//check if username has the right characters (no code)
function invalidUid($usrname) {
    if (!preg_match('/^[a-zA-Z0-9]*$/', $usrname)) {
        $result = true;
    } 
    else {
    $result = false;
    }

return $result;
}


//check if mail is valid
function invalidEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } 
    else {
    $result = false;
    }

return $result;
}
//check if password and password repeat matches
function pwdMatch($pwd, $pwdRepeat) {
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } 
    else {
    $result = false;
    }

return $result;
}



//check if userUid or userEmail exists
function uidExists($conn, $usrname, $email) {
$sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)) {
header("location: ../signup.php?error=stmtfailed");
exit();
}
    mysqli_stmt_bind_param($stmt, "ss", $usrname, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

//create user inside the database
function createUser($conn, $name, $email, $usrname, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
    exit();
    }

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $usrname, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../index.php?error=none");
        exit();
    }

    function emptyInputLogin($usrname, $pwd) {
        if (empty($usrname) || empty($pwd)) {
            $result = true;
        } 
        else {
        $result = false;
        }
    return $result;
    }

    function loginUser($conn, $usrname, $pwd) {
        $uidExists = uidExists($conn, $usrname, $usrname);

        if ($uidExists === false) {
            header("location: ../login.php?error=wronglogin");
            exit();
        }

        $pwdHashed = $uidExists["usersPwd"];
        $checkPwd = password_verify($pwd, $pwdHashed);

        if ($checkPwd === false) {
            header("location: ../login.php?error=wronglogin");
            exit();;
        }
        else if ($checkPwd === true) {
            session_start();
            $_SESSION["userid"] = $uidExists["usersID"];
            $_SESSION["useruid"] = $uidExists["usersUid"];
            header("location: ../index.php");
            exit();
        }
    }

?>
