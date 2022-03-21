<?php
require 'db_connection.php';
?>


<h1>Results</h1>


<div class="aandoeningen-search__container">
    <?php
    if (isset($_POST['medicijnen-submit'])) {
        // make sure the data is safe (NO SQL injection)
        $search = mysqli_real_escape_string($conn, $_POST['medicijnen-query']);
        $sql = "SELECT * FROM products WHERE name LIKE '%$search%';";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if ($queryResult > 0) {
            echo "Er zijn " . $queryResult . " resultaten gevonden!";
            while ($row = mysqli_fetch_assoc($result)) {
              
    ?>
                <br> <a id="" href=""><?php echo $row['name']; ?></a> <br>
    <?php
            }
        } else {
            echo "Er zijn geen resultaten gevonden!";
        }
    }


    ?>

</div>