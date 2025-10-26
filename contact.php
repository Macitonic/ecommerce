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
            --primary-color: #f39d00;
            --dark-bg: rgba(22, 7, 7, 0.95);
            --form-bg: #cac3c3ff;
            --button-color: #da8f04ff;
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

        /* Contact Section */
        .contact-section {
            margin: 2% auto;
            max-width: 1200px;
            width: 100%;
            padding: 0 1.5rem;
        }

        .contact-section h1 {
            margin-bottom: 0.5rem;
            font-size: clamp(1.5rem, 4vw, 2rem);
        }

        .contact-section h3 {
            margin-bottom: 1.5rem;
            font-size: clamp(0.95rem, 2vw, 1.1rem);
            font-weight: 500;
            color: #666;
        }

        /* Contact Section 101 */
        .contact-sec101 {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            gap: 0;
            margin: 2rem 0;
        }

        .get-in-touch {
            background: var(--dark-bg);
            color: #fff;
            flex: 0 1 40%;
            min-height: 550px;
            height: auto;
            padding: 2rem 1.5rem;
            border: 1px solid transparent;
            border-radius: 15px 0 0 15px;
        }

        .get-in-touch h2 {
            font-size: clamp(1.3rem, 3vw, 1.6rem);
            margin-bottom: 1rem;
        }

        .get-in-touch>p {
            font-size: clamp(0.9rem, 1.5vw, 1rem);
            line-height: 1.6;
            font-weight: 300;
            margin-bottom: 2rem;
        }

        .contact-info {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: 1rem;
            margin: 2rem 0;
        }

        .contact-info img {
            flex-shrink: 0;
            width: clamp(28px, 5vw, 35px);
            height: clamp(28px, 5vw, 35px);
        }

        .contact-info h4 {
            font-size: clamp(0.95rem, 2vw, 1.05rem);
            margin-bottom: 0.3rem;
            color: var(--primary-color);
        }

        .contact-info p {
            font-weight: 300;
            font-size: clamp(0.85rem, 1.5vw, 0.95rem);
            line-height: 1.5;
        }

        /* Contact Form */
        .contact-form {
            flex: 0 1 60%;
            min-height: 550px;
            height: auto;
            background-color: var(--form-bg);
            border: 1px solid transparent;
            border-radius: 0 15px 15px 0;
            padding: 2rem 1.5rem;
        }

        .contact-form h2 {
            font-size: clamp(1.3rem, 3vw, 1.6rem);
            margin-bottom: 1.5rem;
        }

        .input1 {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .input1>div {
            flex: 1;
            min-width: 250px;
        }

        .input1 legend,
        .input2 legend,
        .input3 legend {
            margin-bottom: 0.5rem;
            font-size: clamp(0.9rem, 1.5vw, 1rem);
            font-weight: 500;
        }

        .input1 input {
            width: 100%;
            height: 40px;
            padding: 0 1rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 1.2rem;
            font-size: clamp(0.85rem, 1.5vw, 0.95rem);
            transition: border 0.3s ease;
        }

        .input1 input:focus,
        .input2 input:focus,
        .input3 textarea:focus {
            outline: none;
            border: 1px solid var(--primary-color);
        }

        .input2 {
            margin-bottom: 1.2rem;
        }

        .input2 input {
            width: 100%;
            height: 40px;
            padding: 0 1rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: clamp(0.85rem, 1.5vw, 0.95rem);
            transition: border 0.3s ease;
        }

        .input3 {
            display: flex;
            flex-direction: column;
        }

        .input3 textarea {
            width: 100%;
            min-height: 120px;
            margin-bottom: 1.2rem;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-family: var(--font-primary);
            font-size: clamp(0.85rem, 1.5vw, 0.95rem);
            resize: vertical;
            transition: border 0.3s ease;
        }

        .input3 button {
            background-color: var(--button-color);
            color: #fff;
            font-size: clamp(0.9rem, 1.5vw, 0.99rem);
            font-weight: 600;
            border: 1px solid transparent;
            width: 140px;
            height: 42px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .input3 button:hover {
            background-color: #f39d00;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Map Section */
        .map {
            margin: 3rem 0;
        }

        iframe {
            width: 100%;
            height: 450px;
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        /* FAQ Section */
        .faq h2 {
            font-size: clamp(1.4rem, 3vw, 1.8rem);
            margin-bottom: 2rem;
        }

        .faq-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .faq-card-container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .faq-card {
            background-color: var(--dark-bg);
            width: 100%;
            padding: 1.5rem;
            border-radius: 15px;
            color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .faq-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .faq-card h3 {
            font-weight: 500;
            font-family: var(--font-secondary);
            font-size: clamp(1rem, 2vw, 1.1rem);
            margin-bottom: 0.8rem;
            color: var(--primary-color);
        }

        .faq-card p {
            font-weight: 300;
            font-family: var(--font-primary);
            font-size: clamp(0.85rem, 1.5vw, 0.95rem);
            line-height: 1.6;
        }

        /* Tablet Landscape (max-width: 1024px) */
        @media (max-width: 1024px) {
            .contact-section {
                padding: 0 1rem;
            }

            .get-in-touch {
                flex: 0 1 42%;
                padding: 1.5rem 1.2rem;
            }

            .contact-form {
                flex: 0 1 58%;
                padding: 1.5rem 1.2rem;
            }

            .faq-container {
                grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
                gap: 1.2rem;
            }

            iframe {
                height: 400px;
            }
        }

        /* Tablet Portrait (max-width: 768px) */
        @media (max-width: 768px) {
            .contact-section {
                padding: 0 0.5rem;
                margin: 2% auto;
            }

            .contact-sec101 {
                flex-direction: column;
                gap: 0;
            }

            .get-in-touch {
                flex: 1;
                width: 100%;
                border-radius: 15px 15px 0 0;
                min-height: auto;
                padding: 2rem 1.5rem;
            }

            .contact-form {
                flex: 1;
                width: 100%;
                border-radius: 0 0 15px 15px;
                min-height: auto;
                padding: 2rem 1.5rem;
            }

            .contact-info {
                margin: 1.5rem 0;
                gap: 0.8rem;
            }

            .input1 {
                flex-direction: column;
                gap: 0;
            }

            .input1>div {
                min-width: 100%;
            }

            .faq-container {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .faq-card {
                padding: 1.2rem;
            }

            iframe {
                height: 350px;
            }

            .map {
                margin: 2rem 0;
            }
        }

        /* Mobile (max-width: 480px) */
        @media (max-width: 480px) {
            .contact-section {
                padding: 0 0.3rem;
            }

            .contact-section h1 {
                font-size: 1.5rem;
            }

            .contact-section h3 {
                font-size: 0.9rem;
                margin-bottom: 1rem;
            }

            .get-in-touch {
                padding: 1.5rem 1rem;
                border-radius: 12px 12px 0 0;
            }

            .get-in-touch h2 {
                font-size: 1.3rem;
            }

            .get-in-touch>p {
                font-size: 0.9rem;
                line-height: 1.5;
            }

            .contact-info {
                margin: 1.2rem 0;
                gap: 0.6rem;
            }

            .contact-info img {
                width: 28px;
                height: 28px;
            }

            .contact-info h4 {
                font-size: 0.95rem;
            }

            .contact-info p {
                font-size: 0.85rem;
            }

            .contact-form {
                padding: 1.5rem 1rem;
                border-radius: 0 0 12px 12px;
            }

            .contact-form h2 {
                font-size: 1.3rem;
            }

            .input1 legend,
            .input2 legend,
            .input3 legend {
                font-size: 0.9rem;
                margin-bottom: 0.4rem;
            }

            .input1 input,
            .input2 input {
                height: 38px;
                font-size: 0.85rem;
                margin-bottom: 1rem;
            }

            .input3 textarea {
                min-height: 100px;
                font-size: 0.85rem;
                margin-bottom: 1rem;
            }

            .input3 button {
                width: 100%;
                max-width: 160px;
                height: 40px;
                font-size: 0.9rem;
            }

            .faq h2 {
                font-size: 1.4rem;
                margin-bottom: 1.5rem;
            }

            .faq-card {
                padding: 1rem;
            }

            .faq-card h3 {
                font-size: 1rem;
                margin-bottom: 0.6rem;
            }

            .faq-card p {
                font-size: 0.85rem;
                line-height: 1.5;
            }

            iframe {
                height: 300px;
                border-radius: 8px;
            }
        }

        /* Small Mobile (max-width: 375px) */
        @media (max-width: 375px) {
            .contact-section {
                padding: 0 0.2rem;
            }

            .get-in-touch {
                padding: 1.2rem 0.8rem;
            }

            .contact-form {
                padding: 1.2rem 0.8rem;
            }

            .contact-info {
                gap: 0.5rem;
            }

            .faq-card {
                padding: 0.9rem;
            }

            iframe {
                height: 250px;
            }

            .input3 button {
                max-width: 140px;
                height: 38px;
            }
        }

        /* Large Desktop (min-width: 1400px) */
        @media (min-width: 1400px) {
            .contact-section {
                max-width: 1400px;
            }

            .get-in-touch {
                padding: 2.5rem 2rem;
            }

            .contact-form {
                padding: 2.5rem 2rem;
            }

            .faq-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }

            iframe {
                height: 500px;
            }
        }

        /* Extra Large Desktop (min-width: 1600px) */
        @media (min-width: 1600px) {
            .contact-section {
                max-width: 1600px;
            }

            iframe {
                height: 550px;
            }
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
                <p>Have a question, need help with your order, or want to learn more about our products? We’d love to hear from you. Our team is always ready to assist and ensure you get the best shopping experience possible.</p>
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
                            <h3>1. How long does delivery take?</h3>
                            <p>Most orders are delivered within 1–3 business days, depending on your location. You’ll receive tracking details once your package is shipped.</p>
                        </div>
                        <div class="faq-card">
                            <h3>2. Can I return or exchange a product?</h3>
                            <p>Yes, we accept returns and exchanges within 7 days of delivery — as long as the item is unused and in its original packaging. </p>
                        </div>
                    </div>

                    <div class="faq-card-container">
                        <div class="faq-card">
                            <h3>3. How can I track my order?</h3>
                            <p>After placing your order, you’ll receive a tracking link via SMS or email. You can also contact us directly for updates. </p>
                        </div>
                        <div class="faq-card">
                            <h3>4. Do you offer same-day delivery?</h3>
                            <p>Yes, same-day delivery is available within select areas in Nairobi and Ongata Rongai. Extra charges may apply based on distance. </p>
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