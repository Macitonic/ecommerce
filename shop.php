<?php
session_start();
include 'db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        h1 {
            text-align: left;
            font-size: 1.8rem;
        }

        h4 {
            margin-left: 20px;
        }


        .card-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            max-width: 1200px;
            width: 100%;
            padding: 2rem 3%;
            margin: 0 auto;
        }

        .card {
            background-color: rgba(34, 13, 13, 0.85);
            max-width: 220px;
            width: 100%;
            min-height: 300px;
            height: auto;
            border: 1px solid transparent;
            border-radius: 20px 10px 10px 20px;
            box-shadow: 1px 1px 3px grey, -1px -1px 3px grey;
            transition: all 0.1s ease;
        }

        .card:hover {
            width: 100%;
            max-width: 221px;
            min-height: 302px;
            height: auto;
            border: 1px solid transparent;
            border-radius: 20px 10px 10px 20px;
            box-shadow: 1.2px 1.2px 1.8px grey, -1.2px -1.2px 1.8px grey;

        }

        .card-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            color: rgba(245, 245, 245, 0.95);
            transition: all 0.1s ease;

        }

        .card-content:hover {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            gap: 0;
            color: rgba(254, 254, 254, 1);
        }

        .card-content h2 {
            font-size: 1rem;
            margin: 12px;
            text-align: left;

        }


        .card-content p {
            font-size: 0.9rem;
            margin: 0 0 14px 12px;
            text-align: left;

        }

        .card-content button {
            width: 120px;
            height: 28px;
            margin-left: 12px;
            background-color: #c07e03ff;
            border: 1px solid transparent;
            border-radius: 10px;
            color: #fff;
            font-weight: 700;
            transition: all 0.1s ease;
            font-size: 0.9rem;
        }

        .card-content button:hover {
            width: 122px;
            height: 30px;
            margin-left: 12px;
            background-color: #c07e03ff;
            border: 1px solid transparent;
            border-radius: 10px;
            color: #fff;
            font-weight: 750;
            font-size: 0.92rem;
        }

        .image img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 20px 10px 0 0;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <!--shop products-->
    <h1>Shop all of our products</h1>
    <h4>Home / Shop</h4>
    <div>
        <div class="card-container">
            <?php
            $results = $conn->query('SELECT * FROM products');
            while ($row = $results->fetch_assoc()) {
            ?>
                <div class="card" style="cursor: pointer;" onclick="location.href='details_page.php?add=<?php echo $row['id'];  ?>'">
                    <div class="image">
                        <img src="<?php echo $row['image']; ?>" style="height:200px; object-fit:cover;">
                    </div>
                    <div class="card-content">
                        <h2><?php echo $row['name'] ?></h2>
                        <p><?php echo $row['description'] ?></p>
                        <p>ksh.<?php echo $row['price'] ?></p>
                        <button type="button" onclick="event.stopPropagation(); location='cart.php?add_type=products&add_id=<?php echo $row['id']; ?>'">Add to Cart</button>
                    </div>
                </div>
            <?php }; ?>
        </div>

    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>

</html>