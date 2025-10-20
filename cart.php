<?php
session_start();
include 'db.php';

//adds items to the cart
if (isset($_GET['add'])) {
  $id = (int)$_GET['add'];
  if ($id > 0) {
    $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
  }

  header("location:cart.php");
  exit;
}
//removes the items in the cart
if (isset($_GET['remove'])) {
  $remove = (int)$_GET['remove'];
  if ($remove > 0) {
    unset($_SESSION['cart'][$_GET['remove']]);
  }

  header("location:cart.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="container py-5">
  <h1>Your Cart</h1>
  <table class="table">
    <tr>
      <th>Product</th>
      <th>Quantity</th>
      <th>Price</th>
      <th></th>
    </tr>
    <?php
    $total = 0;
    if (!empty($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $id => $qty) {
        $safe_id = (int)$id;
        $result = $conn->query("SELECT * FROM products WHERE id=$id");
        $product = $result->fetch_assoc();
        //An if block that checks if the table data that was retrieved if it exists, if not the it skipa the next lines of codes to the next block
        if (!$product) {
          unset($_SESSION['cart'][$id]);
          continue;
        };
        $subtotal = $product['price'] * $qty;
        $total += $subtotal;
        echo "<tr>
                <td>{$product['name']}</td>
                <td>$qty</td>
                <td>Ksh $subtotal</td>
                <td><a href='cart.php?remove=$safe_id' class='btn btn-danger btn-sm'>Remove</a></td>
            </tr>";
      }
    } else {
      echo "<tr><td colspan='4'>Cart is empty</td></tr>";
    }
    ?>
    <tr>
      <td colspan="2"></td>
      <td><b>Total: Ksh <?php echo $total; ?></b></td>
      <td></td>
    </tr>
  </table>
  <a href="checkout.php" class="btn btn-primary">Checkout</a>
  <a href="shop.php" class="btn btn-primary">Continue Shopping</a>
</body>

</html>