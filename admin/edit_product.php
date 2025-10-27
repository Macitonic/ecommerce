<?php
include '../db.php';

$allowed = ['products', 'featured_products', 'new_arrivals', 'headphones', 'laptops', 'pc', 'watches'];

if (isset($_GET['id'], $_GET['table'])) {
  $id = (int) $_GET['id'];
  $table = $_GET['table'];

  if (in_array($table, $allowed, true)) {
    $sql = "SELECT * FROM `$table` WHERE id=?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
      $stmt->bind_param('i', $id);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        $current_table = $table;
      }
      $stmt->close();
    }
  } else {
    echo "<h1>Invalid table</h1>";
  }
} else {
  echo "<h1>The product not found</h1>";
  exit;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $desc = $_POST['description'];
  $price = $_POST['price'];

  if (!empty($_FILES['image']['name'])) {
    $target = "../uploads/" . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $imagePath = "uploads/" . basename($_FILES['image']['name']);
    $sql = ("UPDATE `$current_table` SET name='$name', description='$desc', price='$price', image='$imagePath' WHERE id=?");
    $stmt = $conn->prepare($sql);

    if ($stmt) {
      $stmt->bind_param('i', $id);
      $stmt->execute();
    }
  } else {
    $sql = ("UPDATE `$current_table` SET name='$name', description='$desc', price='$price' WHERE id=?");
    $stmt = $conn->prepare($sql);

    if ($stmt) {
      $stmt->bind_param('i', $id);
      $stmt->execute();
    }
  }

  header("Location: products_list.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Edit Product</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="container py-5">
  <h1>Edit Product</h1>
  <form method="post" enctype="multipart/form-data">
    <input class="form-control mb-2" name="name" value="<?php echo $product['name']; ?>" required>
    <textarea class="form-control mb-2" name="description"><?php echo $product['description']; ?></textarea>
    <input class="form-control mb-2" name="price" value="<?php echo $product['price']; ?>" type="number" step="0.01" required>
    <input class="form-control mb-2" type="file" name="image">
    <img src="../<?php echo $product['image']; ?>" width="120"><br><br>
    <button class="btn btn-warning" type="submit">Update Product</button>
  </form>
</body>

</html>