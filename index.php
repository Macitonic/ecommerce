<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>My PHP E-commerce</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="container py-5">
  <h1 class="mb-4">Welcome to My Shop</h1>
  <div class="row">
    <?php
    $result = $conn->query("SELECT * FROM products");
    while ($row = $result->fetch_assoc()) {
    ?>
      <div class="col-md-3">
        <div class="card mb-4">
          <img src="<?php echo $row['image']; ?>" class="card-img-top" style="height:200px; object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['name']; ?></h5>
            <p>Ksh <?php echo $row['price']; ?></p>
            <a href="cart.php?add=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Add to Cart</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</body>
</html>
