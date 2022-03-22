<?php
require 'includes/db_connection.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gezondsheid informatie in samenwerking met Thuisarts.nl">
    <link rel="stylesheet" href="css/style.css">
    <title>Lijst van aandoeningen</title>
</head>

<body>
    <header class="header__aandoeningen">
        <a class="hero__img__a" href="index.php"><img class="hero__img" src="images/logo/logo.svg" alt="Logo"></a>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Voorlichting</a></li>
                <li><a href="#">Medicijnen</a></li>
            </ul>
        </nav>
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<button class='hero__cta'>APO</button>";
        } else {
            echo "<button class='hero__cta'>Login</button>";
        }
        ?>
    </header>

    <section class="hero__aandoeningen__lijst">
        <div class="hero__aandoeningen__container-1">
            <a href="#A">A</a>
            <a href="#B">B</a>
            <a href="#C">C</a>
            <a href="#D">D</a>
            <a href="#E">E</a>
            <a href="#F">F</a>
            <a href="#G">G</a> </br>
            <a href="#H">H</a>
            <a href="#I">I</a>
            <a href="#J">J</a>
            <a href="#K">K</a>
            <a href="#L">L</a>
            <a href="#M">M</a>
            <a href="#N">N</a> </br>
            <a href="#O">O</a>
            <a href="#P">P</a>
            <a href="#Q">Q</a>
            <a href="#R">R</a>
            <a href="#S">S</a>
            <a href="#T">T</a>
            <a href="#U">U</a> </br>
            <a href="#V">V</a>
            <a href="#W">W</a>
            <a href="#X">X</a>
            <a href="#Y">Y</a>
            <a href="#Z">Z</a>

        </div>
        <div class="hero__aandoeningen__container-2">
            <h2>Onderwerpen A-Z</h2>
            <hr class="hero__aandoeningen__container-2__line">
            <?php
            $sql = "SELECT * from aandoeningen ORDER BY naam ASC;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <a id="<?php echo $row['naam']; ?>" href="aandoeningen/<?php echo $row['ID']; ?>.php"><?php echo $row['naam']; ?></a> <br>
            <?php
                }
            }

            ?>






        </div>
    </section>




</body>

</html>