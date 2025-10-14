<?php include '../../db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/styles.css" />
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
            background: #1A1A1A;
            color: #fff;
            font-family: var(--font-primary);
        }

        h1,
        h2,
        h3,
        .title,
        .product-name {
            font-family: var(--font-secondary);
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1rem;
            padding: 2rem;
            max-width: 1200px;
            width: 100%;
            padding: 3.5rem 3% 5rem;
            margin: 0 auto;
        }

        .card {
            background-color: rgba(34, 13, 13, 0.85);
            max-width: 220px;
            width: 100%;
            height: 350px;
            border: 1px solid transparent;
            border-radius: 20px 10px 10px 20px;
            box-shadow: 1px 1px 1.8px grey, -1px -1px 1.8px grey;
            transition: all 0.1s ease;
        }

        .card:hover {
            width: 100%;
            max-width: 221px;
            height: 352px;
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
            object-fit: fill;
            border-radius: 20px 10px 0 0;
        }
    </style>
</head>

<body>
    <?php include '../../includes/navbar.php'; ?>
    <div class="card-container">
        <?php
        $results = $conn->query('SELECT * FROM laptops');
        while ($row = $results->fetch_assoc()) {
        ?>
            <div class="card">
                <div class="image">
                    <img src="https://i.pinimg.com/736x/fd/3f/c7/fd3fc71cf6257839ca007b9c39803aae.jpg" alt="laptop">
                </div>
                <div class="card-content">
                    <h2><?php echo $row['name'] ?></h2>
                    <p><?php echo $row['description'] ?></p>
                    <p>ksh.<?php echo $row['price'] ?></p>
                    <button>Add to Cart</button>
                </div>
            </div>
        <?php }; ?>
    </div>
    <?php include '../../includes/footer.php'; ?>
    <script src="../../assets/js/main.js"></script>
</body>

</html>