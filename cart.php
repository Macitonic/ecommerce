<?php
session_start();
include 'db.php';

//get item details function

function getItemsId(mysqli $conn, string $type, int $id)
{
  $sql = "";
  $allowed = ['products', 'featured_products', 'new_arrivals', 'headphones', 'laptops', 'pc', 'watches'];
  if (!in_array($type, $allowed, true)){
    return false;
  }

  $sql = "SELECT id, name, price, image FROM `$type` WHERE id= ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param('i', $id);
  $stmt->execute();
  $results = $stmt->get_result();
  return $results->fetch_assoc();
};

//adds items to the cart
if (isset($_GET['add_type'], $_GET['add_id'])) {
  $type = $_GET['add_type'];
  $id = (int)$_GET['add_id'];

  $allowed = ['products', 'featured_products', 'new_arrivals', 'headphones', 'laptops', 'pc', 'watches'];
  if (in_array($type, $allowed, true) && $id > 0) {
    $key = $type . ':' . $id;
    $_SESSION['cart'][$key] = ($_SESSION['cart'][$key] ?? 0) + 1;
  }

  header("location:cart.php");
  exit;
}
//removes the items in the cart
//removes the items in the cart
if (isset($_GET['remove'])) {
  $remove_key = urldecode($_GET['remove']); // Get the full key, e.g., 'products:1'
  if (isset($_SESSION['cart'][$remove_key])) {
    unset($_SESSION['cart'][$remove_key]);
  }

  header("location:cart.php");
  exit;
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Shopping Cart</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets\css\styles.css" />
  <style>
    :root {
      --font-primary: "Roboto", sans-serif;
      --font-secondary: "Montserrat", serif;
    }

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      scroll-behavior: smooth;
    }

    body {
      background: #fff;
      color: #000;
      font-family: var(--font-primary);
    }

    h1,
    h2,
    h3,
    .title,
    .product-name {
      font-family: var(--font-secondary);
    }
    </style>
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
      foreach ($_SESSION['cart'] as $key => $qty) {
        //array destructuring syntax
        [$type, $id] = explode(':', $key);
        $id = (int) $id;
        $items = getItemsId($conn, $type, $id);

        //An if block that checks if the table data that was retrieved if it exists, if not the it skipa the next lines of codes to the next block
        if (!$items) {
          unset($_SESSION['cart'][$key]);
          continue;
        };

        //the urlencode below allows safe url econding hence preventing parsing issues
        $subtotal = $items['price'] * $qty;
        $total += $subtotal;
        echo "<tr>
                <td>{$items['name']}</td>
                <td>$qty</td>
                <td>Ksh $subtotal</td>
                <td><a href='cart.php?remove=" . urlencode($key) . "' class='btn btn-danger btn-sm'>Remove</a></td>
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