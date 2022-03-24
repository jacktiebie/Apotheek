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
            <span class="apo-help__subtitle">We raden aan om eerst onze database te gebruiken voor hulp, maar als u liever een ticket opent, alstublieft </span> <a class="apo-help__sublink" href="">  klik hier</a> 
            </div>
        </div>
            <div class="help-grid">
            <div class="help__faq">
                <div class="apo-help__flex-3">
            <img class="apo-help__question-icon" src="images/icone-point-d-interrogation-question-bleu.png" alt="Question Mark Icon"><h2 class="apo__help-title-2">Frequently Asked Questions</h2>
            </div>
     <div class="help__faq__question-1">
             <h3 class="help__faq-blue">Q. Frequently asked question title? </h3>
             <p class="help__faq__question-1-answer">A. Answer the frequently asked question here.</p>
     </div>
     </div>
     <div class="help__database">
     <div class="apo-help__flex-3"> <img class="apo-help__question-icon" src="images/icone-point-d-interrogation-question-bleu.png" alt="Question Mark Icon"><h2 class="apo__help-title-2">Knowledgebase</h2></div>
    <p class="help__database-subtitle">Our knowledgebase is full of troubleshooting topics that will help you solve any problems you may have when using the system.</p>
    <a href="">- Quick start</a> </br>
    <a href="">- Client guide</a> </br>
    <a href="">- Consultants guide</a> </br>
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

