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
    <style>
:target {
    background-color: yellow;
}
</style>
</head>
<body>
<aside class="admin__aside">
            <a href="index.php"><img class="admin-logo" src="images/logo/logo_black.png" alt="Profile Picture of current user"></a>
            <ul>
            <a href="admin.php" id="admin-a-1" >Dashboard</a>
                <a href="admin-klanten.php" id="admin-a-2">Klanten</a>
                <a href="admin.php" class="admin-a">Bestellingen</a>
                <a href="admin.php" class="admin-a">Analyses</a>
                <a href="admin.php" class="admin-a">Messages</a>
                <a href="admin-products.php" class="admin-a">Medicijnen</a>
                <a href="admin-news.php" class="admin-a">Nieuws</a>
                <a href="admin-settings.php" class="admin-a">Settings</a>
            </ul>
            <a class="admin-sign-out" href="includes/logout.inc.php">Sign out</a>
        </aside>
     <h2>Create a user</h2>
        <form class="contact-form" action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Full name...">
                <input type="text" name="email" placeholder="Email...">
                <input type="text" name="uid" placeholder="Username...">
                <input type="password" name="pwd" placeholder="Password...">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET['error'] == "emptyinput") {
                echo "<p>Vul alle velden in</p>";
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p>Kies een juiste gebruikersnaam</p>";
            } else if ($_GET["error"] == "invalidemail") {
                echo "<p>Kies een juiste email</p>";
            } else if ($_GET["error"] == "passwordmatch") {
                echo "<p>Wachtwoorden komen niet overeen</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Iets ging fout! Probeer het opnieuw</p>";
            } else if ($_GET["error"] == "usernametaken") {
                echo "<p>Gebruikersnaam is al in gebruik</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p>U bent ingelogd</p>";
            } else if ($_GET["newpwd"] == "passwordupdated") {
                echo "<p>Your password is updated!</p>";
            }
        }
        ?>
        <h2>Delete or update a user</h2>
        <div>
        <table class="admin-klanten-table">
        <tr>
            <th>ID</th>
            <th>usersName</th>
            <th>usersEmail</th>
            <th>usersUid</th>
        </tr>
        <?php 
        //define how many results you want per page
        $results_per_page = 2;
        //find out the number of results stored in database
        $sql = "SELECT * from order_details LIMIT 0,5";
        $result = mysqli_query($conn, $sql);
        echo $number_of_results = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)) {
            echo $row['ID'];
        }
        //determine number of total pages available
        $number_of_pages = ceil($number_of_results/$results_per_page);

        //deterine which page number visitor is currently on 
        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }   

        //determine the sql LIMIT starting number for the results on the displaying page
        $this_page_first_result = ($page-1)*$results_per_page;
        //retrieve selected results from database and dsplay them on page
        $sql='SELECT * FROM users LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
        ?>
        <form class="admin-klanten-tr" action="includes/admin.inc.php" method="GET">
        <tr>
            <td><?php echo $row['ID']?></td>
            <input type="hidden" name="usersID" value="<?php echo $row['ID'] ?>">
            <td><input  class="admin-klanten-input" type="text" value="<?php echo $row['usersName']?>" name="userName"></td>
            <td><input class="admin-klanten-input" type="text" value="<?php echo $row['usersEmail']?>"name="userEmail"></td>
            <td><input class="admin-klanten-input" type="text" value="<?php echo $row['usersUid']?>" name="userUid"></td>
            <td><input class="admin-klanten-input" type="submit" name="adminUserUpdate"value="Update"></td>
            <td><button class="admin-klanten-input" type="submit" name="adminUserDelete">Delete</button></td>
        </tr>
        </form>
        <?php 
        }
    
    
        //display the links to the pages
        for ($page=1;$page<=$number_of_pages;$page++) {
            echo '<a href="admin-klanten.php?page=' . $page . '">' . $page . '</a>';
        }
        ?>
        </table>
        </div>
</body>
</html>