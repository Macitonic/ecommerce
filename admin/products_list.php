<?php
include '../db.php';
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}

function getAllProducts(mysqli $conn)
{
  $allowed_tables = ['products', 'featured_products', 'new_arrivals', 'headphones', 'laptops', 'pc', 'watches'];
  $all_products = [];

  foreach ($allowed_tables as $table) {
    $sql = "SELECT id, name, price, image, '$table' as source_table FROM `$table`";
    $result = $conn->query($sql);

    if ($result) {
      while ($row = $result->fetch_assoc()) {
        $all_products[] = $row;
      }
    }
  }
  return $all_products;
}

$all_products = getAllProducts($conn);

?>
<!DOCTYPE html>
<html>

<head>
  <title>Admin - Products</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="container py-5">
  <h1>Product Management</h1>
  <a href="add_display.php" class="btn btn-success mb-3">+ Add Product</a>
  <table class="table table-bordered">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
    <?php foreach ($all_products as $row): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td>Ksh <?= $row['price'] ?></td>
        <td><img src='../<?= $row['image'] ?>' width='80'></td>
        <td><span class="badge bg-info"><?= htmlspecialchars(ucfirst(str_replace('_', ' ', $row['source_table']))) ?></span></td>
        <td>
          <a href='edit_product.php?id=<?= $row['id'] ?>&table=<?= $row['source_table'] ?>' class='btn btn-warning btn-sm'>Edit</a>
          <a href='delete_product.php?id=<?= $row['id'] ?>&table=<?= $row['source_table'] ?>' class='btn btn-danger btn-sm' onclick='return confirm("Delete product?");'>Delete</a>
        </td>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
  <a href="logout.php">Logout</a>
</body>

</html>