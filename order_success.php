<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Order Success</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
  <h1>🎉 Order Successful!</h1>
  <p>Thank you for shopping with us. Your order ID is <b><?php echo $_GET['id']; ?></b>.</p>
  <a href="index.php" class="btn btn-primary">Back to Shop</a>
</body>
</html>
