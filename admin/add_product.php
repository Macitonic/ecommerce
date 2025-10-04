<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $desc = $_POST['description'];
  $price = $_POST['price'];

  $target = "../uploads/" . basename($_FILES['image']['name']);
  move_uploaded_file($_FILES['image']['tmp_name'], $target);

  $imagePath = "uploads/" . basename($_FILES['image']['name']);

  $conn->query("INSERT INTO products (name, description, price, image) VALUES ('$name', '$desc', '$price', '$imagePath')");
  header("Location: products_list.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
  <h1>Add Product</h1>
  <form method="post" enctype="multipart/form-data">
    <input class="form-control mb-2" name="name" placeholder="Product Name" required>
    <textarea class="form-control mb-2" name="description" placeholder="Description"></textarea>
    <input class="form-control mb-2" name="price" placeholder="Price" type="number" step="0.01" required>
    <input class="form-control mb-2" type="file" name="image" required>
    <button class="btn btn-success">Save Product</button>
  </form>
</body>
</html>
