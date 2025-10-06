<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>layout</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
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
        color: #222;
        font-family: var(--font-primary);
      }

      h1,
      h2,
      h3,
      .title,
      .product-name {
        font-family: var(--font-secondary);
      }
    </style>
  </head>
  <body>
    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
  </body>
</html>
