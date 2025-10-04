<?php
session_start();
include '../db.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT password FROM auth where username=?");
    $stmt -> bind_param('s', $username);
    $stmt -> execute();
    $stmt -> store_result();
    $stmt -> bind_result($hashed_password);
    $stmt -> fetch();

    if($stmt -> num_rows>0 && password_verify($password, $hashed_password)) {
        $_SESSION["username"] = $username;
        header('Location: products_list.php');
        exit;
    } else {
        $error = "Invalid password or username!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce | Login</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="Enter password" required>
        <button type="submit">Submit</button>
    </form>
    <?php if(isset($error)) echo"<p style='color:red;'>$error</p>"; ?>
</body>
</html>