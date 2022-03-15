<?php
require 'includes/db_connection.php';

if(isset($_POST["add_to_cart"]))
{
 if(isset($_SESSION["shopping_cart"]))
 {
 $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
 if(!in_array($_GET["ID"], $item_array_id))
 {
 $count = count($_SESSION["shopping_cart"]);
 $item_array = array(
 'item_id' => $_GET["ID"],
 'item_name' => $_POST["hidden_name"],
 'item_price' => $_POST["hidden_price"],
 'item_quantity' => $_POST["quantity"]
 );
 $_SESSION["shopping_cart"][$count] = $item_array;
 }
 else
 {
 echo '<script>alert("Item Already Added")</script>';
 }
 }
 else
 {
 $item_array = array(
 'item_id' => $_GET["ID"],
 'item_name' => $_POST["hidden_name"],
 'item_price' => $_POST["hidden_price"],
 'item_quantity' => $_POST["quantity"]
 );
 $_SESSION["shopping_cart"][0] = $item_array;
 }
}
 
if(isset($_GET["action"]))
{
 if($_GET["action"] == "delete")
 {
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 if($values["item_id"] == $_GET["ID"])
 {
 unset($_SESSION["shopping_cart"][$keys]);
 echo '<script>alert("Item Removed")</script>';
 echo '<script>window.location="index.php"</script>';
 }
 }
 }
}


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
   <div class="shop__container">
        <h2>Vind de juiste medicijnen voor u</h2>
        <form class="hero__container__form" action="#" method="GET">
                <input class="hero__container__form-input" placeholder="Vind medicijnen in onze webshop" type="text" name="query" />
                <input class="hero__container__form-search" type="submit" value="Search" />
            </form>
    </div>
    </section>
    <div class="shop__grid">
    <div class="shop__left">
    <img src="images/placeholder_1.png" alt="">
    </div>
    <div class="shop__right">
<?php
 $query = "SELECT ID, name, price FROM medicines ORDER BY ID ASC";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
 while($row = mysqli_fetch_array($result))
 {
 ?>
<div>
 <form method="post" action="medicijnen-winkel.php?action=add&id=<?php echo $row["ID"]; ?>">
 <img src="images/paracetamol.png" /><br />
 
 <h4 class="shop__right__item__name"><?php echo $row["name"]; ?></h4>
 
 <h4 class="shop__right__item__price">$ <?php echo $row["price"]; ?></h4>
 
 <input type="text" name="quantity" value="1" class="form-control" />
 
 <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
 
 <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
 
 <input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" />
 
 </form>
 </div>
 <?php
 }
 }
 ?>

<div style="clear:both"></div>
 <br />
 <h3>Order Details</h3>
 <div class="table-responsive">
 <table class="table table-bordered">
 <tr>
 <th width="40%">Item Name</th>
 <th width="10%">Quantity</th>
 <th width="20%">Price</th>
 <th width="15%">Total</th>
 <th width="5%">Action</th>
 </tr>
 <?php
 if(!empty($_SESSION["shopping_cart"]))
 {
 $total = 0;
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 ?>
 <tr>
 <td><?php echo $values["item_name"]; ?></td>
 <td><?php echo $values["item_quantity"]; ?></td>
 <td>$ <?php echo $values["item_price"]; ?></td>
 <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
 <td><a href="index.php?action=delete&ID=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
 </tr>
 <?php
 $total = $total + ($values["item_quantity"] * $values["item_price"]);
 }
 ?>
 <tr>
 <td colspan="3" >Total</td>
 <td >$ <?php echo number_format($total, 2); ?></td>
 <td></td>
 </tr>
 <?php
 }
 ?>
 
 </table>
 </div>
 </div>
 </div>
 <br />
   
    </div>
    </div>
</body>
</html>