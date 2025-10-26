<?php
session_start();
include 'db.php';

$allowed = ['products', 'featured_products', 'new_arrivals', 'headphones', 'laptops', 'pc', 'watches'];

if (isset($_GET['add'])) {
    $id = (int)$_GET['add'];
    $product = null;


    foreach ($allowed as $table) {

        $sql = "SELECT * FROM `$table` WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $product = $result->fetch_assoc();
            $current_table = $table;
            break;
        }
    }

    if (!$product) {
        echo "<h2>Product not found.</h2>";
        exit;
    }
} else {
    echo "<h2>No product selected.</h2>";
    exit;
}
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
            --dark-bg: rgba(22, 7, 7, 0.95);
            --button-primary: #f39d00;
            --button-secondary: whitesmoke;
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
            transition: all 1s ease;
        }

        section.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Details Page Section */
        .details_page {
            margin: 3% auto;
            max-width: 1200px;
            width: calc(100% - 6%);
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: clamp(2rem, 5vw, 3rem);
            padding: 0 1rem;
        }

        /* Product Image */
        .image {
            flex: 0 1 450px;
            max-width: 450px;
            width: 100%;
            height: auto;
            aspect-ratio: 9 / 8;
            border: 2px solid var(--primary-color);
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .image:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 18px;
            transition: transform 0.3s ease;
        }

        .image:hover img {
            transform: scale(1.05);
        }

        /* Info Card */
        .info-card {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            background: var(--dark-bg);
            color: #fff;
            padding: 2.5rem 2rem;
            border: 2px solid var(--primary-color);
            border-radius: 20px;
            min-height: 400px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .info-card h3 {
            font-size: clamp(1.2rem, 3vw, 1.5rem);
            font-weight: 600;
            line-height: 1.3;
            color: var(--primary-color);
        }

        .info-card p {
            font-weight: 300;
            font-size: clamp(0.9rem, 1.5vw, 1rem);
            line-height: 1.6;
        }

        .info-card p[style*="font-weight: 600"] {
            font-size: clamp(1.1rem, 2vw, 1.3rem);
            color: var(--primary-color);
        }

        /* Buttons */
        .btns {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin-top: auto;
            width: 100%;
        }

        .btn1,
        .btn2 {
            flex: 1;
            min-width: 150px;
            font-size: clamp(0.85rem, 1.5vw, 0.95rem);
            font-weight: 600;
            border: 1px solid transparent;
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .btn1 {
            background-color: var(--button-primary);
            color: #fff;
        }

        .btn1:hover {
            background-color: #d68f04;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(243, 157, 0, 0.3);
        }

        .btn2 {
            background-color: var(--button-secondary);
            color: #000;
            border: 1px solid #ddd;
        }

        .btn2:hover {
            background-color: #e0e0e0;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        /* Description Section */
        .description {
            width: calc(100% - 6%);
            max-width: 1200px;
            margin: 5% auto;
            padding: 0 1rem;
        }

        .description-titles {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .description-titles h3 {
            font-size: clamp(1.1rem, 2.5vw, 1.3rem);
            font-weight: 600;
            color: #000;
        }

        hr {
            background-color: var(--primary-color);
            height: 2px;
            border: none;
            margin: 0 0 1.5rem;
            width: 100%;
        }

        .description-content {
            border: 2px solid var(--primary-color);
            border-radius: 15px;
            width: 100%;
            min-height: 250px;
            background-color: var(--dark-bg);
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .description p {
            max-width: 100%;
            color: #fff;
            font-size: clamp(0.9rem, 1.5vw, 1rem);
            line-height: 1.8;
            font-weight: 300;
        }

        /* Tablet Landscape (max-width: 1024px) */
        @media (max-width: 1024px) {
            .details_page {
                gap: 2rem;
                margin: 2% auto;
            }

            .image {
                flex: 0 1 400px;
                max-width: 400px;
            }

            .info-card {
                padding: 2rem 1.5rem;
            }

            .description {
                margin: 4% auto;
            }

            .description-content {
                min-height: 220px;
                padding: 1.5rem;
            }
        }

        /* Tablet Portrait (max-width: 768px) */
        @media (max-width: 768px) {
            .details_page {
                flex-direction: column;
                gap: 2rem;
                width: calc(100% - 4%);
                margin: 2% auto;
            }

            .image {
                flex: none;
                max-width: 100%;
                width: 100%;
                aspect-ratio: 4 / 3;
                border-radius: 15px;
            }

            .image img {
                border-radius: 13px;
            }

            .info-card {
                width: 100%;
                min-height: auto;
                padding: 2rem 1.5rem;
                border-radius: 15px;
            }

            .btns {
                flex-direction: row;
                gap: 1rem;
            }

            .btn1,
            .btn2 {
                flex: 1;
                min-width: auto;
            }

            .description {
                width: calc(100% - 4%);
                margin: 3% auto;
            }

            .description-content {
                min-height: 200px;
                border-radius: 12px;
            }
        }

        /* Mobile (max-width: 480px) */
        @media (max-width: 480px) {
            .details_page {
                width: calc(100% - 2%);
                gap: 1.5rem;
                padding: 0 0.5rem;
            }

            .image {
                aspect-ratio: 1 / 1;
                border-radius: 12px;
                border-width: 1.5px;
            }

            .image img {
                border-radius: 10.5px;
            }

            .info-card {
                padding: 1.5rem 1.2rem;
                gap: 1.2rem;
                border-radius: 12px;
                border-width: 1.5px;
            }

            .info-card h3 {
                font-size: 1.2rem;
            }

            .info-card p {
                font-size: 0.9rem;
                line-height: 1.5;
            }

            .btns {
                flex-direction: column;
                gap: 0.8rem;
                margin-top: 1rem;
            }

            .btn1,
            .btn2 {
                width: 100%;
                min-width: 100%;
                padding: 0.7rem 1rem;
            }

            .description {
                width: calc(100% - 2%);
                margin: 4% auto;
            }

            .description-titles {
                gap: 1rem;
            }

            .description-titles h3 {
                font-size: 1.1rem;
            }

            hr {
                margin-bottom: 1rem;
            }

            .description-content {
                min-height: 180px;
                padding: 1.2rem;
                border-radius: 10px;
                border-width: 1.5px;
            }

            .description p {
                font-size: 0.9rem;
                line-height: 1.6;
            }
        }

        /* Small Mobile (max-width: 375px) */
        @media (max-width: 375px) {
            .details_page {
                gap: 1.2rem;
            }

            .image {
                border-radius: 10px;
            }

            .image img {
                border-radius: 8px;
            }

            .info-card {
                padding: 1.2rem 1rem;
                gap: 1rem;
                border-radius: 10px;
            }

            .info-card h3 {
                font-size: 1.1rem;
            }

            .info-card p {
                font-size: 0.85rem;
            }

            .btn1,
            .btn2 {
                padding: 0.6rem 0.8rem;
                font-size: 0.85rem;
            }

            .description-content {
                min-height: 160px;
                padding: 1rem;
            }

            .description p {
                font-size: 0.85rem;
                line-height: 1.5;
            }
        }

        /* Large Desktop (min-width: 1400px) */
        @media (min-width: 1400px) {
            .details_page {
                max-width: 1400px;
                gap: 4rem;
            }

            .image {
                flex: 0 1 500px;
                max-width: 500px;
            }

            .info-card {
                padding: 3rem 2.5rem;
            }

            .description {
                max-width: 1400px;
            }

            .description-content {
                min-height: 300px;
                padding: 2.5rem;
            }
        }

        /* Extra Large Desktop (min-width: 1600px) */
        @media (min-width: 1600px) {

            .details_page,
            .description {
                max-width: 1600px;
            }

            .image {
                flex: 0 1 550px;
                max-width: 550px;
            }
        }
    </style>
</head>

<body>
    <!--Navbar-->
    <?php include 'includes/navbar.php'; ?>
    <!--Body-->
    <section class="details_page">
        <div class="image">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo ($product['name']); ?>">
        </div>
        <div class="info-card">
            <h3><?php echo ($product['name']); ?></h3>
            <p style="font-weight: 600;">ksh.<?php echo $product['price']; ?></p>
            <p><?php echo ($product['description']); ?></p>
            <div class="btns">
                <button type="button" class="btn1" style="cursor: pointer;" onclick="location.href='cart.php?add_type=<?php echo $current_table ?>&add_id=<?php echo $product['id'];  ?>'">Add To Cart</button>
                <button type="button" class="btn2" style="cursor: pointer;" onclick="location.href='checkout.php'">Buy Now</button>
                </button>
            </div>
    </section>

    <section class="description">
        <div class="description-titles">
            <h3>Product Description</h3>
        </div>
        <hr>
        <div class="description-content">
            <p><?php echo ($product['description']); ?></p>
        </div>
    </section>


    <!--Footer-->
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>

</html>