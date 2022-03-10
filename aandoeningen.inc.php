<?php
require 'includes/db_connection.php';
?>


<h1>Results</h1>


<div class="aandoeningen-search__container">
    <?php
    if (isset($_POST['aandoeningen-submit'])) {
        // make sure the data is safe (NO SQL injection)
        $search = mysqli_real_escape_string($conn, $_POST['aandoeningen-query']);
        $sql = "SELECT * FROM aandoeningen WHERE naam LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if ($queryResult > 0) {
            echo "Er zijn " . $queryResult . " resultaten gevonden!";
            while ($row = mysqli_fetch_assoc($result)) {
              
    ?>
                <br> <a id="<?php echo $row['naam']; ?>" href="aandoeningen/<?php echo $row['ID']; ?>.php"><?php echo $row['naam']; ?></a> <br>
    <?php
            }
        } else {
            echo "Er zijn geen resultaten gevonden!";
        }
    }


    ?>

</div>