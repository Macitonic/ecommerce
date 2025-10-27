<?php
session_start();
include '../../db.php';

?>
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
            --primary-color: #f39d00;
            --card-bg: rgba(34, 13, 13, 0.85);
            --button-color: #c07e03;
            --bg-dark: #1A1A1A;
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
            background: var(--bg-dark);
            color: #fff;
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
            transition: all 1s ease;
        }

        section.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Card Container */
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 2rem;
            padding: 3rem 1.5rem 4rem;
            max-width: 1400px;
            width: 100%;
            margin: 0 auto;
        }

        /* Smartwatch Card */
        .smartwatch-card {
            background-color: var(--card-bg);
            width: 100%;
            min-height: 350px;
            height: auto;
            border: 1px solid transparent;
            border-radius: 20px 10px 10px 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            cursor: pointer;
            overflow: hidden;
        }

        .smartwatch-card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            transform: translateY(-8px) scale(1.02);
        }

        /* Card Content */
        .card-content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: flex-start;
            color: rgba(245, 245, 245, 0.95);
            padding: 1rem;
            min-height: 200px;
            transition: color 0.3s ease;
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
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        /* Image */
        .image img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 20px 10px 0 0;
        }

        a {
            text-decoration: none;
        }

        /* Tablet Landscape (max-width: 1024px) */
        @media (max-width: 1024px) {
            .card-container {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 1.5rem;
                padding: 2.5rem 1.5rem 3.5rem;
            }

            .smartwatch-card {
                min-height: 330px;
                border-radius: 18px 10px 10px 18px;
            }

            .image img {
                height: 140px;
                border-radius: 18px 10px 0 0;
            }
        }

        /* Tablet Portrait (max-width: 768px) */
        @media (max-width: 768px) {
            .card-container {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 1.5rem;
                padding: 2rem 1rem 3rem;
            }

            .smartwatch-card {
                min-height: 340px;
                border-radius: 15px 10px 10px 15px;
            }

            .card-content {
                padding: 1rem 0.8rem;
            }

            .image img {
                height: 160px;
                border-radius: 15px 10px 0 0;
            }

            .card-content button {
                max-width: 130px;
            }
        }

        /* Mobile (max-width: 480px) */
        @media (max-width: 480px) {
            .card-container {
                grid-template-columns: 1fr;
                gap: 1.5rem;
                padding: 2rem 0.8rem;
            }

            .smartwatch-card {
                max-width: 100%;
                min-height: 320px;
                border-radius: 15px;
                margin: 0 auto;
            }

            .card-content {
                padding: 1rem;
                min-height: 170px;
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

            .image img {
                height: 150px;
                border-radius: 15px 15px 0 0;
            }

            .card-content button {
                width: 100%;
                max-width: 140px;
                padding: 0.6rem;
                font-size: 0.85rem;
            }
        }

        /* Small Mobile (max-width: 375px) */
        @media (max-width: 375px) {
            .card-container {
                padding: 1.5rem 0.5rem;
                gap: 1.2rem;
            }

            .smartwatch-card {
                min-height: 300px;
                border-radius: 12px;
            }

            .card-content {
                padding: 0.9rem;
                min-height: 160px;
            }

            .card-content h2 {
                font-size: 0.9rem;
            }

            .card-content p {
                font-size: 0.8rem;
                margin-bottom: 0.5rem;
            }

            .image img {
                height: 140px;
                border-radius: 12px 12px 0 0;
            }

            .card-content button {
                max-width: 120px;
                padding: 0.5rem;
                font-size: 0.8rem;
            }
        }

        /* Large Desktop (min-width: 1400px) */
        @media (min-width: 1400px) {
            .card-container {
                max-width: 1600px;
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
                gap: 2.5rem;
                padding: 3.5rem 2rem 5rem;
            }

            .smartwatch-card {
                min-height: 380px;
            }

            .image img {
                height: 170px;
            }

            .card-content {
                padding: 1.2rem;
            }
        }

        /* Extra Large Desktop (min-width: 1600px) */
        @media (min-width: 1600px) {
            .card-container {
                max-width: 1800px;
                grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
                gap: 3rem;
            }

            .smartwatch-card {
                min-height: 400px;
            }

            .image img {
                height: 180px;
            }
        }
    </style>
</head>

<body>
    <?php include '../../includes/navbar.php'; ?>
    <section class="card-container">
        <?php
        $results = $conn->query('SELECT * FROM watches');
        while ($row = $results->fetch_assoc()) {
        ?>
            <div class="smartwatch-card" style="cursor: pointer; " onclick="location.href='../../details_page.php?add_type=watches&add=<?php echo $row['id'];  ?>'">
                <div class="image">
                    <img src="../../<?php echo $row['image']; ?>" alt="laptop">
                </div>
                <div class="card-content">
                    <h2><?php echo $row['name'] ?></h2>
                    <p><?php echo $row['description'] ?></p>
                    <p>ksh.<?php echo $row['price'] ?></p>
                    <button type="button" onclick="event.stopPropagation(); window.location='../../cart.php?add_type=watches&add_id=<?php echo $row['id']; ?>'">Add to Cart</button>
                </div>
            </div>
        <?php }; ?>
    </section>

    <?php include '../../includes/footer.php'; ?>
    <script src="../../assets/js/main.js"></script>
</body>

</html>