<?php
require 'includes/db_connection.php';
session_start();
if (isset($_SESSION["useruid"])) {
$test = $_SESSION["useruid"];
//get right id from users table
$sql = "SELECT ID FROM users where usersUid = '$test'";
$result = mysqli_query($conn, $sql) or die("BAD SQL");
$row = mysqli_fetch_assoc($result);
$id = $row['ID'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
    <title>APO bestellingen</title>
</head>
<body>
<aside class="APO__aside">
            <a href="#"><img class="profile__picture" src="images/profile/download.jpg" alt="Profile Picture of current user"></a>
            <ul>
                <a href="apo-orders.php">Orders</a>
                <a href="">Invoices</a>
                <a href="apo-help.php">Help</a>
                <a href="apo-settings.php">Settings</a>
                <a class="APO__aside__sign-out" href="includes/logout.inc.php">Sign out</a>
            </ul>
        </aside>
        <div class="apo-help__container-flex-1">
       <h1 class="apo-help__title">Hulp nodig?</h1>
       <form class="hero__container__form" action="includes/medicijnen.inc.php" method="POST">
                <input class="apo__help__form-input" placeholder="Waar heeft u problemen mee?" type="text" name="medicijnen-query" />
                <input class="apo__help__form-search" name="medicijnen-submit" type="submit" value="Krijg hulp" />
            </form>
            <div class="apo-help__container-flex-2">
            <p class="apo-help__subtitle">We raden aan om eerst onze database te gebruiken voor hulp,</br> maar als u liever een ticket opent, alstublieft </p> <a class="apo-help__sublink" href=""></br> klik hier</a> 
            </div>
        </div>
            <div class="help-grid">
            <div class="help__faq">
     <h2 class="apo-help__faq">Frequently Asked Questions</h2>
     <div class="help__faq__question-1">
             <h3>Q.Frequently asked question title?</h3>
             <p>A. Answer the frequently asked question here.
             </p>
     </div>
     </div>
     <div class="help__database">
    <h2>Knowledgebase</h2>
    <p>Our knowledgebase is full of troubleshooting topics that will help you solve any problems you may have when using the system.</p>
    <a href="">- Quick start</a>
    <a href="">- Client guide</a>
    <a href="">- Consultants guide</a>
    <a href="">- Templates & Appereance</a>
    </div>
    </div>

<?php
} else {
    echo "<a href='login.php'class='hero__cta'>Login Before Accessing Your APO</a>";
}
    ?>
</body>
</html>

