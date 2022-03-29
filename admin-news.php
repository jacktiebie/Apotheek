<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Nieuws</title>
</head>
<body>
<aside class="APO__aside">
            <a href="#"><img class="profile__picture" src="images/profile/download.jpg" alt="Profile Picture of current user"></a>
            <ul>
                <a href="admin.php">Dashboard</a>
                <a href="admin.php">Klanten</a>
                <a href="admin.php">Bestellingen</a>
                <a href="admin.php">Analyses</a>
                <a href="admin.php">Messages</a>
                <a href="admin-products.php">Medicijnen</a>
                <a href="admin-news.php">Nieuws</a>
                <a href="admin-settings.php">Settings</a>
                <a class="APO__aside__sign-out" href="includes/logout.inc.php">Sign out</a>
            </ul>
        </aside>
<h2>Voeg nieuwsartikelen toe aan de database</h2>
    <form action="includes/news-add.inc.php" method="post">
    <input type="text" name="news-image" placeholder="Image Location">
    <input type="text" name="news-subject" placeholder="Subject">
    <input type="date" name="news-date" placeholder="Date">
    <input type="text" name="news-title" placeholder="Title">
    <input type="text" name="news-subtitle" placeholder="Subtitle">
    <input type="submit" name="news-submit" value="Voeg een nieuws artikel aan de database">
    </form>
</body>
</html>