<?php
session_start();
include 'db.php';

//get item details function

function getItemsId(mysqli $conn, string $type, int $id)
{
  $sql = "";
  $allowed = ['products', 'featured_products', 'new_arrivals', 'headphones', 'laptops', 'pc', 'watches'];
  if (!in_array($type, $allowed, true)) {
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

  if ($id > 0) {
    $key = $type . ':' . $id;
    $_SESSION['cart'][$key] = ($_SESSION['cart'][$key] ?? 0) + 1;
  }

  header("location:cart.php");
  exit;
}

//removes the items in the cart
if (isset($_GET['remove'])) {
  $remove_key = urldecode($_GET['remove']); // Get the full key, e.g., 'products:1'
  if (isset($_SESSION['cart'][$remove_key])) {
    unset($_SESSION['cart'][$remove_key]);
  }

  header("location:cart.php");
  exit;
}
//prepare cart items for display
$cart_items = [];

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

    $cart_items[] = [
      'name' => $items['name'],
      'image' => $items['image'],
      'qty' => $qty,
      'subtotal' => $subtotal,
      'key' => urldecode($key)
    ];
  }
}

include 'cart_view.php';
