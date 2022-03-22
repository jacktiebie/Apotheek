<?php
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
            <a href="">Logo</a>
            <ul>
                <a href="">Orders</a>
                <a href="">Invoices</a>
                <a href="">Help</a>
                <a href="">Settings</a>
            </ul>
            <a href="">Sign out</a>
        </aside>

<p class="apo-orders__name">Welkom <?php echo $test ?></p>
<h1 class="apo-orders__title">Bekijk uw gemaakte bestellingen</h1>
<div class="apo-grid">
    <div class="apo-orders__number">
<h3 class="apo-orders__black">Bestellings nummer</h3>
<p>349</p>
</div>
<div class="apo-orders__total">
<h3 class="apo-orders__black">Bedrag</h3>
<p>$50</p>
</div>
<div class="apo-orders__date">
<h3 class="apo-orders__black">Datum</h3>
<p>09-09-2002 16:55</p>
</div>
<div class="apo-orders__shipped">
<h3 class="apo-orders__black">Status</h3>
<p>shipped</p>
</div>
<div class="apo-orders__track">
<h3 class="apo-orders__black">Tracking Number</h3>
<p>kdwd2323wdid2932</p>
</div>
<div class="apo-orders__items">
<h3 class="apo-orders__black">Ordered Items</h3>
</div>
</div>

<?php

    ?>
</body>
</html>