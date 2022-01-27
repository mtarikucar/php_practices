<?php session_start();
#cart.php - A simple shopping cart with add to cart, and remove links
//---------------------------
//initialize sessions

//Define the products and cost
$products = array("product A", "product B", "product C");
$amounts = array("19.99", "10.99", "2.99");

//Load up session
if (!isset($_SESSION["total"])) {
  $_SESSION["total"] = 0;
  for ($i = 0; $i < count($products); $i++) {
    $_SESSION["qty"][$i] = 0;
    $_SESSION["amounts"][$i] = 0;
  }
}

//---------------------------
//Reset
if (isset($_POST['reset'])) {
  session_unset();
}

//---------------------------
//Add
if (isset($_POST["add"])) {
  $i = $_POST["add"];
  $qty = $_SESSION["qty"][$i] + 1;
  $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
  $_SESSION["cart"][$i] = $i;
  $_SESSION["qty"][$i] = $qty;
  $_SESSION['postdata'] = $_POST;
  unset($_POST);
  header("Location: " . $_SERVER['PHP_SELF']);
  exit;
  //header("Location: http://localhost/WEB_SINAV/sepet1.php");
}
function url()
{
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}
//---------------------------
//Delete
if (isset($_POST["delete"])) {
  $i = $_POST["delete"];
  $qty = $_SESSION["qty"][$i];
  $qty--;
  $_SESSION["qty"][$i] = $qty;
  //remove item if quantity is zero
  if ($qty == 0) {
    $_SESSION["amounts"][$i] = 0;
    unset($_SESSION["cart"][$i]);
  } else {
    $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
  }
}
?>
<h2>List of All Products</h2>
<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
  <table>
    <tr>
      <th>Product</th>
      <th width="10px">&nbsp;</th>
      <th>Amount</th>
      <th width="10px">&nbsp;</th>
      <th>Action</th>
    </tr>
    <?php
    for ($i = 0; $i < count($products); $i++) {
    ?>
      <tr>
        <td><?php echo ($products[$i]); ?></td>
        <td width="10px">&nbsp;</td>
        <td><?php echo ($amounts[$i]); ?></td>
        <td width="10px">&nbsp;</td>
        <td><button type='submit' name='add' value="<?php echo ($i); ?>">Buy</button></td>
      </tr>
    <?php 
    }
    ?>
    <tr>
      <td colspan="5"></td>
    </tr>
    <tr>
      <td colspan="5"><button type='submit' name='reset'>Reset</button></td>
    </tr>
  </table>
</form>
<?php
if (isset($_SESSION["cart"])) {
?>
  <br /><br /><br />
  <h2>Cart</h2>
  <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
    <table>
      <tr>
        <th>Product</th>
        <th width="10px">&nbsp;</th>
        <th>Qty</th>
        <th width="10px">&nbsp;</th>
        <th>Amount</th>
        <th width="10px">&nbsp;</th>
        <th>Action</th>
      </tr>
      <?php
      $total = 0;
      foreach ($_SESSION["cart"] as $i) {
      ?>
        <tr>
          <td><?php echo ($products[$_SESSION["cart"][$i]]); ?></td>
          <td width="10px">&nbsp;</td>
          <td><?php echo ($_SESSION["qty"][$i]); ?></td>
          <td width="10px">&nbsp;</td>
          <td><?php echo ($_SESSION["amounts"][$i]); ?></td>
          <td width="10px">&nbsp;</td>
          <td><button type='submit' name='delete' value="<?php echo ($i); ?>">Delete</button></td>
        </tr>
      <?php
        $total = $total + $_SESSION["amounts"][$i];
      }
      $_SESSION["total"] = $total;
      ?>
      <tr>
        <td colspan="7">Total : <?php echo ($total); ?></td>
      </tr>
    </table>
  </form>
<?php

}

?>