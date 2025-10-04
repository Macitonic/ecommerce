<?php
session_start();
include 'db.php';

if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
}

if (isset($_GET['remove'])) {
    unset($_SESSION['cart'][$_GET['remove']]);
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
    <tr><th>Product</th><th>Quantity</th><th>Price</th><th></th></tr>
    <?php
    $total = 0;
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $id => $qty) {
            $result = $conn->query("SELECT * FROM products WHERE id=$id");
            $product = $result->fetch_assoc();
            $subtotal = $product['price'] * $qty;
            $total += $subtotal;
            echo "<tr>
                <td>{$product['name']}</td>
                <td>$qty</td>
                <td>Ksh $subtotal</td>
                <td><a href='cart.php?remove=$id' class='btn btn-danger btn-sm'>Remove</a></td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Cart is empty</td></tr>";
    }
    ?>
    <tr><td colspan="2"></td><td><b>Total: Ksh <?php echo $total; ?></b></td><td></td></tr>
  </table>
  <a href="checkout.php" class="btn btn-primary">Checkout</a>
  <a href="index.php" class="btn btn-primary">Continue Shopping</a>
</body>
</html>
