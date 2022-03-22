</?php
session_start();
 ?>

      
      
      <header>
            <a class="hero__img__a" href="index.php"><img class="hero__img" src="images/logo/logo.svg" alt="Logo"></a>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Service</a></li>
                    <li><a href="aandoeningen.php">Voorlichting</a></li>
                    <li><a href="aandoeningen-lijst.php">Medicijnen</a></li>
                </ul>
            </nav>
            <?php 
if (isset($_SESSION["useruid"])) {
    echo "<a href='apo.php'class='hero__cta'>APO</a>";
} else {
    echo "<a href='login.php'class='hero__cta'>Login</a>";
}
            ?>
        </header>

   