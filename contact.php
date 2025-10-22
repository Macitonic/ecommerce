<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
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

        section {
            opacity: 0;
            transform: translateY(50px);
            transition: all 1s ease;
        }

        section.show {
            opacity: 1;
            transform: translateY(0);
        }

        .contact-section {
            margin: 2% 3%;
            max-width: 1200px;
            width: 100%;
        }

        .contact-section h1 {
            margin-bottom: 5px;
        }

        .contact-section h3 {
            margin-bottom: 15px;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .contact-sec101 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 0;
        }

        .get-in-touch {
            background: rgba(22, 7, 7, 0.95);
            color: #fff;
            width: 40%;
            height: 550px;
            padding: 2rem 1rem;
            border: 1px solid transparent;
            border-radius: 15px 0 0 15px;
        }

        .contact-info {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: 10px;
            margin: 50px 0;
        }

        .contact-info p {
            font-weight: 200;
        }

        .contact-form {
            width: 60%;
            height: 550px;
            background-color: #cac3c3ff;
            border: 1px solid transparent;
            border-radius: 0 15px 15px 0;
            padding: 2rem 1rem;
        }

        .input1 {
            display: flex;
            justify-content: space-between;
        }

        .input1 legend {
            margin-bottom: 10px;
        }

        .input1 input {
            min-width: 330px;
            height: 40px;
            border-top: 1px solid transparent;
            border-radius: 6px;
            margin-bottom: 18px;
        }

        .input2 legend {
            margin-bottom: 10px;
        }

        .input2 input {
            width: 100%;
            height: 40px;
            border-top: 1px solid transparent;
            border-radius: 6px;
            margin-bottom: 18px;
        }

        .input3 {
            display: flex;
            flex-direction: column;
        }

        .input3 legend {
            margin-bottom: 10px;
        }

        .input3 textarea {
            width: 100%;
            height: 120px;
            margin-bottom: 18px;
            border-top: 1px solid transparent;
            border-radius: 6px;
        }

        .input3 button {
            background-color: #da8f04ff;
            color: #fff;
            font-size: 0.99rem;
            font-weight: 600;
            border: 1px solid transparent;
            width: 120px;
            height: 40px;
            border-radius: 5px;
            transition: all 0.2s ease;
        }

        .input3 button:hover {
            background-color: #da8f04ff;
            color: #fff;
            font-size: 0.995rem;
            font-weight: 610;
            border: 1px solid transparent;
            width: 122px;
            height: 42px;
            border-radius: 5px;

        }

        .map {
            margin: 5% 0;
        }

        iframe {
            width: 100%;
            height: 450px;
            border-radius: 10px;
        }

        .faq-container {
            display: flex;
            justify-content: space-between;
            margin: 3% 0;

        }

        .faq-card {
            margin-bottom: 10px;
            background-color: rgba(22, 7, 7, 0.95);
            width: 570px;
            padding: 1rem;
            border-radius: 15px;
            color: #fff;
        }

        .faq-container h3 {
            font-weight: 500;
        }

        .faq-container p {
            font-weight: 200;
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <main class="contact-section">
        <section>
            <h1>Contact Us</h1>
            <h3>About us/ Contact</h3>
        </section>

        <section class="contact-sec101">
            <div class="get-in-touch">
                <h2>Get in Touch</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga explicabo minima.</p>
                <div class="contact-info">
                    <img
                        width="35"
                        height="35"
                        src="https://img.icons8.com/ios-filled/50/FAB005/marker.png"
                        alt="marker" />
                    <div>
                        <h4>Our Location</h4>
                        <p>Njambi Street, Ongata Rongai</p>
                    </div>
                </div>
                <div class="contact-info">
                    <img
                        width="35"
                        height="35"
                        src="https://img.icons8.com/sf-ultralight-filled/25/FAB005/phone.png"
                        alt="phone" />
                    <div>
                        <h4>Phone Number</h4>
                        <p>+254 45407137</p>
                    </div>
                </div>
                <div class="contact-info">
                    <img
                        width="35"
                        height="35"
                        src="https://img.icons8.com/ios-filled/50/FAB005/mail.png"
                        alt="mail" />
                    <div>
                        <h4>Email Address</h4>
                        <p>support@ecommerce254.com</p>
                    </div>
                </div>
                <div class="contact-info">
                    <img width="35" height="35" src="https://img.icons8.com/ios-filled/50/FAB005/timer.png" alt="timer" />
                    <div>
                        <h4>Business Hours</h4>
                        <div>
                            <p>Mon-Fri: 9:00am-6:00pm</p>
                            <p>Sat: 10:00am-4:00pm</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h2>Send us a message</h2>
                <form action="insert.php" method="post">
                    <div class="input1">
                        <div>
                            <legend>Your Name</legend>
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>

                        <div>
                            <legend>Your Email</legend>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div class="input2">
                        <legend>Subject</legend>
                        <input type="text" name="subject" placeholder="How can we help you?" required>
                    </div>
                    <div class="input3">
                        <legend>Message</legend>
                        <textarea name="message" id="message" required placeholder="Please provide details about your inquiry..."></textarea>
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>

        <section>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6335959725257!2d36.7571589677483!3d-1.396305595475378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f05e86a61a2f9%3A0x309aeb3342d2759b!2sEmmanuel%20House!5e0!3m2!1sen!2s!4v1761063900506!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section>
            <div class="faq">
                <h2>Frequently Asked Questions</h2>
                <div class="faq-container">
                    <div class="faq-card-container">
                        <div class="faq-card">
                            <h3>1. Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ea fugit et atque quaerat ipsum voluptas. </p>
                        </div>
                        <div class="faq-card">
                            <h3>2. Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ea fugit et atque quaerat ipsum voluptas. </p>
                        </div>
                    </div>

                    <div class="faq-card-container">
                        <div class="faq-card">
                            <h3>3. Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ea fugit et atque quaerat ipsum voluptas. </p>
                        </div>
                        <div class="faq-card">
                            <h3>4. Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ea fugit et atque quaerat ipsum voluptas. </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>

</html>