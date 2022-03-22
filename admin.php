<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Control Panel</title>
</head>
<body>
    <h1>Test CMS System</h1>
    <h2>Voeg medicijnen toe aan de database</h2>
    <form action="includes/medicine-add.inc.php" method="post">
    <input type="text" name="medicine-name" placeholder="Name of Medicine">
    <input type="number" name="medicine-quantity" placeholder="How much stock of Medicine">
    <input type="number" name="medicine-price" placeholder="Price in euro of Medicine">
    <input type="text" name="medicine-desc" placeholder="Description of Medicine">
    <input type="submit" name="medicine-submit" value="Add Medicine to the database">
    </form>

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