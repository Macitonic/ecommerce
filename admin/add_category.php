<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $desc = $_POST['description'];

    $uploadDir = __DIR__ . "/../uploads/";
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $filename = basename($_FILES['image']['name']);
    $target = $uploadDir . $filename;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $image_path = 'uploads/' . $filename;
        $conn->query("INSERT INTO categories(name, description, image_url) values('$name', '$desc', '$image_path')");
        header('Location: products_list.php');
    } else {
        echo "<p>Image Upload failed. Check Permosions</p>";
    }
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <input name="name" placeholder="Category Name" required>
        <textarea name="description" placeholder="description"></textarea>
        <input type="file" name="image" required>
        <button>Save Category</button>
    </form>
</body>

</html>