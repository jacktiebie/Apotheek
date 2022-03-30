<?php
include 'includes/db_connection.php';
SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    <title>Admin Klanten</title>
</head>
<body>
<aside class="admin__aside">
            <a href="index.php"><img class="admin-logo" src="images/logo/logo_black.png" alt="Profile Picture of current user"></a>
            <ul>
            <a href="admin.php">Dashboard</a>
                <a href="admin.php">Klanten</a>
                <a href="admin.php">Bestellingen</a>
                <a href="admin.php">Analyses</a>
                <a href="admin.php">Messages</a>
                <a href="admin-products.php">Medicijnen</a>
                <a href="admin-news.php">Nieuws</a>
                <a href="admin-settings.php">Settings</a>
            </ul>
            <a class="admin-sign-out" href="includes/logout.inc.php">Sign out</a>
        </aside>
        <table>
        <tr>
            <th>ID</th>
            <th>usersName</th>
            <th>usersEmail</th>
            <th>usersUid</th>
        </tr>
        <?php 
        $sql = "SELECT * FROM users;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <form action="includes/admin.inc.php" method="GET">
        <tr>
            <td><?php echo $row['ID']?></td>
            <input type="hidden" name="usersID" value="<?php echo $row['ID'] ?>">
            <td><input type="text" value="<?php echo $row['usersName']?>" name="userName"></td>
            <td><input type="text" value="<?php echo $row['usersEmail']?>"name="userEmail"></td>
            <td><input type="text" value="<?php echo $row['usersUid']?>" name="userUid"></td>
            <td><input type="submit" name="adminUserUpdate"value="Update"></td>
            <td><button type="submit" name="adminUserDelete">Delete</button></td>
        </tr>
        </form>
        <?php 
        }?>
        </table>
</body>
</html>