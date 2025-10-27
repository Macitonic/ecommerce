<?php
include '../db.php';

$allowed = ['products', 'featured_products', 'new_arrivals', 'headphones', 'laptops', 'pc', 'watches'];

if (isset($_GET['id'], $_GET['table'])) {
    $id = (int)$_GET['id'];
    $table = $_GET['table'];

    if (in_array($table, $allowed, true)) {

        $sql = "DELETE FROM `$table` WHERE id=?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param('i', $id);
            $stmt->execute();
        }
        header("Location: products_list.php");
    }
}
