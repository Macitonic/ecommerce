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
            --primary-color: #f39d00;
            --card-bg: rgba(34, 13, 13, 0.85);
            --button-color: #c07e03;
        }

        html {
            scroll-behavior: smooth;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: #fff;
            color: #000;
            font-family: var(--font-primary);
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        .title,
        .product-name {
            font-family: var(--font-secondary);
        }

        section {
            opacity: 0;
            transform: translateY(50px);
            transition: all 1.2s ease;
            padding: 2rem 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        section.show {
            opacity: 1;
            transform: translateY(0);
        }

        h1 {
            text-align: left;
            font-size: clamp(1.4rem, 4vw, 1.8rem);
            margin-bottom: 0.5rem;
            padding: 0 1rem;
        }

        h4 {
            margin-left: 20px;
            font-size: clamp(0.9rem, 2vw, 1rem);
            margin-bottom: 1rem;
            color: #666;
        }

        /* Card Container */
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            width: 100%;
            padding: 2rem 1rem;
            margin: 0 auto;
        }

        .card {
            background-color: var(--card-bg);
            width: 100%;
            min-height: 350px;
            height: auto;
            border: 1px solid transparent;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            overflow: hidden;
        }

        .card:hover {
            border: 1px solid transparent;
            border-radius: 15px;
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .card-content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: flex-start;
            color: rgba(245, 245, 245, 0.95);
            transition: all 0.3s ease;
            padding: 1rem;
            min-height: 150px;
        }

        .card-content:hover {
            color: rgba(254, 254, 254, 1);
        }

        .card-content h2 {
            font-size: clamp(0.95rem, 2vw, 1rem);
            margin-bottom: 0.5rem;
            text-align: left;
        }

        .card-content p {
            font-size: clamp(0.85rem, 1.5vw, 0.9rem);
            margin-bottom: 0.8rem;
            text-align: left;
            line-height: 1.4;
        }

        .card-content button {
            width: 100%;
            max-width: 140px;
            padding: 0.6rem 1rem;
            background-color: var(--button-color);
            border: 1px solid transparent;
            border-radius: 10px;
            color: #fff;
            font-weight: 700;
            transition: all 0.3s ease;
            font-size: clamp(0.85rem, 1.5vw, 0.9rem);
            cursor: pointer;
            margin-top: auto;
        }

        .card-content button:hover {
            background-color: #d68f04;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .image img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        /* Tablet Landscape (max-width: 1024px) */
        @media (max-width: 1024px) {
            section {
                padding: 2rem 1.5rem;
            }

            .card-container {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
                gap: 1.5rem;
                padding: 1.5rem 1rem;
            }

            h1 {
                padding: 0 0.5rem;
            }

            h4 {
                margin-left: 10px;
            }
        }

        /* Tablet Portrait (max-width: 768px) */
        @media (max-width: 768px) {
            body {
                padding: 0.5rem;
            }

            section {
                width: 100%;
                padding: 1.5rem 1rem;
                margin: 0;
            }

            h1 {
                font-size: 1.5rem;
                text-align: center;
                padding: 0;
            }

            h4 {
                text-align: center;
                margin-left: 0;
                margin-bottom: 1.5rem;
            }

            .card-container {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 1.5rem;
                padding: 1rem 0.5rem;
            }

            .card {
                max-width: 100%;
                min-height: 320px;
            }

            .image img {
                height: 180px;
            }

            .card-content {
                padding: 1rem 0.8rem;
            }

            .card-content button {
                max-width: 130px;
                padding: 0.5rem 0.8rem;
            }
        }

        /* Mobile (max-width: 480px) */
        @media (max-width: 480px) {
            body {
                padding: 0.25rem;
            }

            section {
                padding: 1.5rem 0.5rem;
            }

            h1 {
                font-size: 1.4rem;
                margin-bottom: 0.5rem;
            }

            h4 {
                font-size: 0.9rem;
                margin-bottom: 1rem;
            }

            .card-container {
                grid-template-columns: 1fr;
                gap: 1.2rem;
                padding: 1rem 0;
            }

            .card {
                min-height: 300px;
                border-radius: 12px;
            }

            .image img {
                height: 170px;
                border-radius: 12px 12px 0 0;
            }

            .card-content {
                padding: 0.9rem;
            }

            .card-content h2 {
                font-size: 0.95rem;
                margin-bottom: 0.4rem;
            }

            .card-content p {
                font-size: 0.85rem;
                margin-bottom: 0.6rem;
                line-height: 1.3;
            }

            .card-content button {
                width: 100%;
                max-width: 120px;
                padding: 0.5rem;
                font-size: 0.85rem;
            }
        }

        /* Small Mobile (max-width: 375px) */
        @media (max-width: 375px) {
            section {
                padding: 1rem 0.3rem;
            }

            h1 {
                font-size: 1.3rem;
            }

            .card-container {
                gap: 1rem;
            }

            .card {
                min-height: 280px;
            }

            .image img {
                height: 160px;
            }

            .card-content {
                padding: 0.8rem;
            }

            .card-content h2 {
                font-size: 0.9rem;
            }

            .card-content p {
                font-size: 0.8rem;
            }

            .card-content button {
                max-width: 110px;
                font-size: 0.8rem;
            }
        }

        /* Large Desktop (min-width: 1400px) */
        @media (min-width: 1400px) {
            section {
                max-width: 1400px;
            }

            .card-container {
                max-width: 1400px;
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 2.5rem;
                padding: 2.5rem 1rem;
            }

            .card {
                min-height: 380px;
            }

            .image img {
                height: 220px;
            }
        }

        /* Extra Large Desktop (min-width: 1600px) */
        @media (min-width: 1600px) {
            section {
                max-width: 1600px;
            }

            .card-container {
                max-width: 1600px;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 3rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <!--shop products-->
    <section>
        <h1>Shop all of our products</h1>
        <h4>Home / Shop</h4>
        <div>
            <div class="card-container">
                <?php
                $results = $conn->query('SELECT * FROM products');
                while ($row = $results->fetch_assoc()) {
                ?>
                    <div class="card" style="cursor: pointer;" onclick="location.href='details_page.php?add_type=products&add=<?php echo $row['id'];  ?>'">
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
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>

</html>