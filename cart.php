<?php
//start session
SESSION_START();
//include database connection
include 'includes/db_connection.php';
//create cart if it doesn't exist
if (!(isset($_SESSION['cart']))) {
    $_SESSION['cart'] = array();
} //if cart
//clear cart
if(isset($_GET['clear'])) {
    $_SESSION['cart'] = array();
}

if(isset($_GET['pID'])) {
    $pID = $_GET['pID'];
    $quan = $_GET['quan'];

    if ($quan > 0 && filter_var($quan, FILTER_VALIDATE_INT)) {
        //update the quan
            $_SESSION['cart'][$pID] = $quan;
    } else if($quan == 0) {
            unset($_SESSION['cart'][$pID]);
    } 
    else  {
        echo "Bad Input";
    }//if valid quan
} //isset

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Webshop voor het kopen van diverse medicijnen">
    <link rel="stylesheet" href="css/style.css">
    <title>Medicijnen Webshop</title>
</head>

<body>
    <section class="shop">
        <?php include_once 'header.php'; ?>
    </section>
    <table>
    <tr>
        <th>Item</th><th>Price</th><th>Quantity</th><th>Subtotal</th>
    </tr>
    <?php
    $grand = 0;
    foreach($_SESSION['cart'] as $key => $val) {
        $sql = "SELECT * FROM products where id = '$key'";
        $result = mysqli_query($conn, $sql) or die("BAD SQL: $sql");
        $row = mysqli_fetch_assoc($result);

        $sub = $val * $row['price'];
        $grand += $sub;
        echo"
        <tr>
            <td>{$row['name']}</td>
            <td>$ {$row['price']}</td>
            <td>
            <form action='' method='GET'>
                <input value='$val' name='quan'>
                <input type='hidden' value='$key' name='pID'>
                <input type='submit'>
            </form>
            </td>
            <td>$sub</td>
        </tr>
        ";
    }//foreach

    if (empty($_SESSION['cart'])) {
        echo "<tr><td colspan='4'>Your cart is empty</td></tr>";
    } else {
    echo "<tr><td colspan='4'>Grand Total: $grand</td></tr>";
    }//empty
    ?>
    

    </table>

    <a href="<?php echo $_SERVER['PHP_SELF'];?>?clear=1">Clear Cart</a>
    </div>


</body>

</html>