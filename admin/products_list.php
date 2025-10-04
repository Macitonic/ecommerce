<?php 
include '../db.php'; 
session_start();
if(!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}


?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin - Products</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
  <h1>Product Management</h1>
  <a href="add_product.php" class="btn btn-success mb-3">+ Add Product</a>
  <table class="table table-bordered">
    <tr><th>ID</th><th>Name</th><th>Price</th><th>Image</th><th>Action</th></tr>
    <?php
    $result = $conn->query("SELECT * FROM products");
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>Ksh {$row['price']}</td>
        <td><img src='../{$row['image']}' width='80'></td>
        <td>
          <a href='edit_product.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
          <a href='delete_product.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Delete product?\");'>Delete</a>
        </td>
      </tr>";
    }
    ?>
  </table>
  <a href="logout.php">Logout</a>
</body>
</html>
