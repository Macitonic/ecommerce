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

        .about {
            padding: 2rem 1rem 3rem;
            margin: 1% auto;
            max-width: 1200px;
            width: 100%;
        }

        /* About Hero */
        .about-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('https://i.pinimg.com/1200x/c7/cf/b5/c7cfb52d6ae14b7e54e8581a931657f2.jpg') no-repeat center/cover;
            max-width: 1200px;
            width: 100%;
            min-height: 250px;
            height: auto;
            padding: 2rem 1.5rem;
            border: 1px solid transparent;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .about-hero h2 {
            font-size: clamp(1.5rem, 4vw, 2rem);
            font-weight: 600;
            margin-bottom: 1rem;
            text-align: center;
        }

        .about-hero p {
            font-size: clamp(0.9rem, 2vw, 1.05rem);
            margin: 0;
            text-align: center;
            line-height: 1.6;
            max-width: 900px;
        }

        .about-hero p br {
            display: block;
        }

        /* Story Section */
        .story-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 3rem;
            margin: 10% 0;
            flex-wrap: wrap;
        }

        .our-story {
            flex: 1;
            min-width: 280px;
        }

        .our-story h2 {
            font-size: clamp(1.4rem, 3vw, 1.8rem);
            margin-bottom: 1rem;
        }

        .our-story p {
            line-height: 1.6;
            font-size: clamp(0.9rem, 1.5vw, 1rem);
            max-width: 650px;
        }

        .story-video {
            flex: 0 1 600px;
            width: 100%;
            max-width: 600px;
            height: auto;
            aspect-ratio: 2 / 1;
            border: 1px solid transparent;
            border-radius: 15px;
            overflow: hidden;
        }

        .story-video video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 1px solid transparent;
            border-radius: 15px;
        }

        /* Card Section */
        .card-section {
            margin: 10% 0;
        }

        .title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: clamp(1.4rem, 3vw, 1.8rem);
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            width: 100%;
        }

        .card {
            width: 100%;
            min-height: 230px;
            background-color: var(--dark-bg);
            color: #fff;
            padding: 1.5rem;
            border: 1px solid var(--primary-color);
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .card img {
            margin-bottom: 0.5rem;
        }

        .card h2 {
            font-weight: 600;
            font-size: clamp(1rem, 2vw, 1.2rem);
            margin: 0.8rem 0;
        }

        .card p {
            font-size: clamp(0.85rem, 1.5vw, 0.9rem);
            line-height: 1.5;
            font-weight: 300;
        }

        /* Team Section */
        .team-section {
            margin: 10% 0;
        }

        .team-card {
            width: 100%;
            height: auto;
            min-height: 450px;
            border: 1px solid var(--primary-color);
            border-radius: 15px;
            background-color: var(--dark-bg);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .team-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border: 1px solid transparent;
            border-radius: 15px 15px 0 0;
        }

        .team-card-content {
            padding: 1.2rem;
            color: #fff;
        }

        .team-card h3 {
            margin-bottom: 0.3rem;
            font-weight: 600;
            font-size: clamp(1.05rem, 2vw, 1.2rem);
        }

        .team-card h4 {
            margin: 0.5rem 0 0.8rem;
            font-size: clamp(0.9rem, 1.5vw, 0.98rem);
            color: var(--primary-color);
        }

        .team-card p {
            font-size: clamp(0.85rem, 1.5vw, 0.9rem);
            line-height: 1.5;
            font-weight: 300;
        }

        /* Tablet Landscape (max-width: 1024px) */
        @media (max-width: 1024px) {
            .about {
                padding: 2rem 1.5rem;
                margin: 1% 2%;
            }

            .story-section {
                gap: 2rem;
                margin: 8% 0;
            }

            .card-container {
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                gap: 1.5rem;
            }

            .story-video {
                flex: 0 1 500px;
                max-width: 500px;
            }
        }

        /* Tablet Portrait (max-width: 768px) */
        @media (max-width: 768px) {
            .about {
                padding: 1.5rem 1rem;
                margin: 1% auto;
                width: 95%;
            }

            .about-hero {
                min-height: 200px;
                padding: 1.5rem 1rem;
            }

            .about-hero p br {
                display: none;
            }

            .story-section {
                flex-direction: column;
                gap: 2rem;
                margin: 6% 0;
            }

            .our-story {
                width: 100%;
            }

            .story-video {
                flex: 1;
                max-width: 100%;
                width: 100%;
                aspect-ratio: 16 / 9;
            }

            .card-section,
            .team-section {
                margin: 8% 0;
            }

            .title {
                margin-bottom: 2rem;
            }

            .card-container {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 1.5rem;
            }

            .card {
                min-height: 200px;
                padding: 1.2rem;
            }

            .team-card {
                min-height: 400px;
            }

            .team-card img {
                height: 220px;
            }
        }

        /* Mobile (max-width: 480px) */
        @media (max-width: 480px) {
            .about {
                padding: 1rem 0.5rem;
                width: 98%;
            }

            .about-hero {
                min-height: 180px;
                padding: 1.5rem 0.8rem;
                border-radius: 15px;
            }

            .story-section {
                gap: 1.5rem;
                margin: 5% 0;
            }

            .our-story h2 {
                font-size: 1.4rem;
                margin-bottom: 0.8rem;
            }

            .our-story p {
                font-size: 0.9rem;
                line-height: 1.5;
            }

            .story-video {
                aspect-ratio: 16 / 9;
                border-radius: 10px;
            }

            .card-section,
            .team-section {
                margin: 6% 0;
            }

            .title {
                margin-bottom: 1.5rem;
                font-size: 1.4rem;
            }

            .card-container {
                grid-template-columns: 1fr;
                gap: 1.2rem;
            }

            .card {
                min-height: 180px;
                padding: 1rem;
                border-radius: 12px;
            }

            .card h2 {
                font-size: 1.05rem;
                margin: 0.6rem 0;
            }

            .card p {
                font-size: 0.85rem;
                line-height: 1.4;
            }

            .team-card {
                min-height: 380px;
                border-radius: 12px;
            }

            .team-card img {
                height: 200px;
            }

            .team-card-content {
                padding: 1rem;
            }

            .team-card h3 {
                font-size: 1.05rem;
                margin-bottom: 0.2rem;
            }

            .team-card h4 {
                font-size: 0.9rem;
                margin: 0.4rem 0 0.6rem;
            }

            .team-card p {
                font-size: 0.85rem;
                line-height: 1.4;
            }
        }

        /* Small Mobile (max-width: 375px) */
        @media (max-width: 375px) {
            .about {
                padding: 0.8rem 0.3rem;
            }

            .about-hero {
                min-height: 160px;
                padding: 1.2rem 0.6rem;
            }

            .card {
                padding: 0.9rem;
            }

            .team-card {
                min-height: 360px;
            }

            .team-card img {
                height: 180px;
            }

            .team-card-content {
                padding: 0.8rem;
            }
        }

        /* Large Desktop (min-width: 1400px) */
        @media (min-width: 1400px) {
            .about {
                max-width: 1400px;
            }

            .about-hero {
                max-width: 1400px;
            }

            .card-container {
                gap: 2.5rem;
            }

            .story-video {
                flex: 0 1 700px;
                max-width: 700px;
            }
        }


    </style>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <!--About-hero section-->
    <main class="about">
        <section class="about-hero">
            <h2>About Us</h2>
            <p>At E-commerce254, we’re passionate about making online shopping effortless, enjoyable, and trustworthy. <br> Every product we offer is chosen with care, ensuring our customers always get the best quality and value for their money.</p>
        </section>

        <!--Our story section-->
        <section class="story-section">
            <div class="our-story">
                <h2>Our Story</h2>
                <p>What started as a small idea to make everyday shopping more reliable has grown into a trusted platform serving hundreds of happy customers. Our mission is simple — to connect people with products that make life better. From fast delivery and genuine items to friendly support, everything we do revolves around making sure you shop with confidence. We believe in transparency, quality, and customer happiness — that’s what drives us every single day.</p>
            </div>
            <div class="story-video">
                <video autoplay muted loop poster="assets/thumbnail.jpg">
                    <source src="assets/team.mp4" alt="team.mp4">
                </video>
            </div>
        </section>
        <!--Card section-->
        <section class="card-section">
            <h2 class="title">Our Story</h2>
            <div class="card-container">
                <div class="card">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FAB005/verified-account--v2.png" alt="verified-account--v2" />
                    <h2>Quality</h2>
                    <p>We take pride in offering only the best. Every product is tested, reviewed, and verified before reaching your doorstep — because you deserve nothing less than excellence.</p>
                </div>
                <div class="card">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FAB005/in-transit--v1.png" alt="in-transit--v1" />
                    <h2>Reliable Service</h2>
                    <p>From order to delivery, we keep things simple, fast, and transparent. You can count on us for timely updates, smooth transactions, and safe delivery every time.</p>
                </div>
                <div class="card">
                    <img width="30" height="30" src="https://img.icons8.com/fluency-systems-filled/48/FAB005/shield.png" alt="shield" />
                    <h2>Customer Trust</h2>
                    <p>Your trust is our biggest reward. We’re committed to protecting your data, ensuring secure payments, and offering quick support whenever you need it.</p>
                </div>
                <div class="card">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/FAB005/like--v1.png" alt="like--v1" />
                    <h2>Community Impact</h2>
                    <p>We believe in giving back. Our platform supports local suppliers and small businesses, helping communities grow while delivering great value to our customers.</p>
                </div>
            </div>
        </section>

        <!--Team section-->
        <section class="team-section">
            <h2 class="title">Our Team</h2>
            <div class="card-container">
                <div class="team-card">
                    <img src="https://i.pinimg.com/1200x/8c/73/cb/8c73cbf28dfb4375e8839253d04890d8.jpg" alt="CEO">
                    <div class="team-card-content">
                        <h3>Jane Williams</h3>
                        <h4>Founder & CEO</h4>
                        <P>Jane built this brand from the ground up with one goal — to make quality products accessible to everyone. Her vision and leadership continue to shape the customer-first culture that defines us. </P>
                    </div>

                </div>
                <div class="team-card">
                    <img src="https://i.pinimg.com/736x/2b/cc/55/2bcc55b3291035c4e53afbaa5dd1ae83.jpg" alt="coo">
                    <div class="team-card-content">
                        <h3>John Smith</h3>
                        <h4>Chief Operations Officer</h4>
                        <P>John ensures that every order runs smoothly, from sourcing to delivery. His attention to detail and commitment to excellence make our service as seamless as possible.</P>
                    </div>


                </div>
                <div class="team-card">
                    <img src="https://i.pinimg.com/1200x/32/ea/e9/32eae9f53b8c37d72b8864b93b802c29.jpg" alt="HOP">
                    <div class="team-card-content">
                        <h3>Jay Peterson</h3>
                        <h4>Head of production</h4>
                        <P>Jay oversees product quality and logistics. He ensures that every item meets our strict standards before it reaches you — consistency and reliability are his priorities.</P>
                    </div>

                </div>
                <div class="team-card">
                    <img src="https://i.pinimg.com/736x/45/7f/80/457f80ccd7b2ac0267b8242b5459a51d.jpg" alt="CTO">
                    <div class="team-card-content">
                        <h3>Maria Chan</h3>
                        <h4>Chief Technology Officer</h4>
                        <P>Maria leads our digital innovation efforts, keeping our systems fast, secure, and user-friendly. Her expertise ensures you enjoy a smooth online shopping experience every time.</P>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>

</html>