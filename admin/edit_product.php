<?php
include '../db.php';
$id = $_GET['id'];
$product = $conn->query("SELECT * FROM products WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $desc = $_POST['description'];
  $price = $_POST['price'];

  if (!empty($_FILES['image']['name'])) {
    $target = "../uploads/" . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $imagePath = "uploads/" . basename($_FILES['image']['name']);
    $conn->query("UPDATE products SET name='$name', description='$desc', price='$price', image='$imagePath' WHERE id=$id");
  } else {
    $conn->query("UPDATE products SET name='$name', description='$desc', price='$price' WHERE id=$id");
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
    <button class="btn btn-warning">Update Product</button>
  </form>
</body>
</html>
