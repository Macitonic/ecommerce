<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $total = 0;
    foreach ($_SESSION['cart'] as $id => $qty) {
        $result = $conn->query("SELECT price FROM products WHERE id=$id");
        $product = $result->fetch_assoc();
        $total += $product['price'] * $qty;
    }

    $conn->query("INSERT INTO orders (customer_name, email, phone, address, total) VALUES ('$name','$email','$phone','$address','$total')");
    $order_id = $conn->insert_id;

    foreach ($_SESSION['cart'] as $id => $qty) {
        $result = $conn->query("SELECT price FROM products WHERE id=$id");
        $product = $result->fetch_assoc();
        $price = $product['price'];
        $conn->query("INSERT INTO order_items (order_id, product_id, quantity, price) VALUES ($order_id, $id, $qty, $price)");
    }

    $_SESSION['cart'] = [];
    header("Location: order_success.php?id=$order_id");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
  <h1>Checkout</h1>
  <form method="post">
    <input class="form-control mb-2" name="name" placeholder="Full Name" required>
    <input class="form-control mb-2" name="email" placeholder="Email" required>
    <input class="form-control mb-2" name="phone" placeholder="Phone">
    <textarea class="form-control mb-2" name="address" placeholder="Delivery Address" required></textarea>
    <button class="btn btn-success">Place Order</button>
  </form>
</body>
</html>
