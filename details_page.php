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

        html {
            scroll-behavior: smooth;
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

        section{
            opacity: 0;
            transform: translateY(50px);
            transition: all 1s ease;
        }

        section.show{
            opacity: 1;
            transform: translateY(0);
        }

        .details_page {
            margin: 3%;
            max-width: 1200px;
            width: 100%;
            display: flex;
            justify-content: space-around;
            gap: 50px;
        }

        .image {
            max-width: 450px;
            width: 100%;
            height: 400px;
            border: 1px solid #f39d00;
            border-radius: 20px;
            box-shadow: 3px 3px 3px grey, -3px -3px 3px grey;
        }

        .image img {
            width: 100%;
            object-fit: cover;
            max-height: 399px;
            border-radius: 20px;

        }

        .info-card {
            display: flex;
            flex-direction: column;
            gap: 20px;
            background: rgba(22, 7, 7, 0.95);
            color: #fff;
            padding: 2rem 3rem;
            border: 1px solid #f39d00;
            border-radius: 20px;
        }

        .info-card h3 {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .info-card p {
            font-weight: 300;
        }

        .btns {
            display: flex;
            justify-content: space-between;
            width: 420px;
            margin-top: 2%;
        }


        .btn1 {
            background-color: #f39d00;
            color: #fff;
            font-size: 0.9rem;
            font-weight: 550;
            border: 1px solid transparent;
            width: 200px;
            height: 35px;
            border-radius: 5px;
            transition: all 0.2s ease;
        }

        .btn2 {
            background-color: whitesmoke;
            color: #000;
            font-size: 0.9rem;
            font-weight: 550;
            border: 1px solid transparent;
            width: 200px;
            height: 35px;
            border-radius: 5px;
        }

        .description {
            width: 100%;
            max-width: 1200px;
            margin: 8% 3%;
        }

        .description-titles {
            display: flex;
            gap: 20px;
            margin-left: 10px;
        }

        hr {
            background-color: #f39d00;
            height: 2px;
            margin: 0 auto 5px;
        }

        .description-content {
            border: 1px solid #f39d00;
            border-radius: 15px;
            width: 100%;
            height: 400px;
            background-color: rgba(22, 7, 7, 0.95);
            padding: 1.2rem;
        }

        .description p {
            max-width: 900px;
            color: #fff;
        }
    </style>
</head>

<body>
    <!--Navbar-->
    <?php include 'includes/navbar.php'; ?>
    <!--Body-->
    <section class="details_page">
        <div class="image">
            <img src="https://i.pinimg.com/1200x/b4/35/41/b435417369a997ec8b58550f9545c44f.jpg" alt="watch example">
        </div>
        <div class="info-card">
            <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab corporis aliquid.</h3>
            <p style="font-weight: 600;">ksh.20,000</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <div class="btns">
                <button class="btn1">Add to cart</button>
                <button class="btn2">Buy Now</button>
            </div>
        </div>
    </section>

    <section class="description">
        <div class="description-titles">
            <h3>Product Description</h3>
            <h3>Specifications</h3>
        </div>
        <hr>
        <div class="description-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quos reiciendis ut, labore enim sapiente impedit nihil quod accusamus nobis? Ad mollitia optio libero harum a blanditiis aperiam illum eaque!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem at ducimus, impedit earum minima, sapiente nam tenetur quos libero fuga, dolores alias suscipit reprehenderit molestiae. Enim alias facilis sunt omnis.</p>
        </div>
    </section>

    <!--Footer-->
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>

</html>