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

        .contact-sec1 {
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
    </style>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <section class="contact-section">
        <h1>Contact Us</h1>
        <h3>About us/ Contact</h3>
        <div class="contact-sec1">
            <div class="get-in-touch">
                <h2>Get in Touch</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga explicabo minima.</p>
                <div class="contact-info">
                    <img
                        width="20"
                        height="20"
                        src="https://img.icons8.com/ios-filled/50/FAB005/marker.png"
                        alt="marker" />
                    <div>
                        <h4>Our Location</h4>
                        <p>Njambi Street, Ongata Rongai</p>
                    </div>
                </div>
                <div class="contact-info">
                    <img
                        width="20"
                        height="20"
                        src="https://img.icons8.com/sf-ultralight-filled/25/FAB005/phone.png"
                        alt="phone" />
                    <div>
                        <h4>Phone Number</h4>
                        <p>+254 45407137</p>
                    </div>
                </div>
                <div class="contact-info">
                    <img
                        width="20"
                        height="20"
                        src="https://img.icons8.com/ios-filled/50/FAB005/mail.png"
                        alt="mail" />
                    <div>
                        <h4>Email Address</h4>
                        <p>support@ecommerce254.com</p>
                    </div>
                </div>
                <div class="contact-info">
                    <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FAB005/timer.png" alt="timer" />
                    <div>
                        <h4>Business Hours</h4>
                        <p>Mon-Fri: 9:00am-6:00pm</p>
                        <p>Sat: 10:00am-4:00pm</p>
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
        </div>

    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>

</html>