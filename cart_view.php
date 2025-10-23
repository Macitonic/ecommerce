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
  <link rel="stylesheet" href="assets/css/styles.css" />
  <style>
    html {
      scroll-behavior: smooth;
    }

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

    .title h3 {
      font-size: 1.4rem;

    }

    .title h4 {
      font-size: 1.2rem;

    }

    .title h1 {
      font-size: 1.9rem;
      margin-bottom: 6px;
    }


    .section2 {
      margin: 3%;
      max-width: 1200px;
      width: 100%;
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 40px;
      align-items: start;

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

    .card-container {
      width: 100%;
      height: 120px;
      background-color: #cac3c3ff;
      display: flex;
      justify-content: space-between;
      gap: 20px;
      margin: 40px 0;
      border-top: 1px solid #f39d00;
      border-right: 1px solid #f39d00;
      border-radius: 15px;
    }

    .left-card {
      display: flex;
      align-items: flex-start;
      gap: 20px;
    }

    .left-card img {
      border-radius: 15px;
    }

    .card-title h2 {
      font-size: 1.2rem;
      font-weight: 600;
    }

    .right-card {
      display: flex;
      flex-direction: column;
      gap: 60px;
      margin: 5px 15px;
    }

    .right-card p,
    a {
      color: #000;
      text-decoration: none;
      font-size: 1.1rem;
      font-weight: 500;
      margin-left: 5px;
    }

    .remove:hover {
      transform: translateY(-3px) scale(1.02);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .remove {
      display: flex;
      align-items: center;
    }

    .actions {
      width: 100%;
      display: flex;
      justify-content: space-between;
    }

    .btn {
      background-color: #f39d00;
      color: #fff;
      font-size: 0.9rem;
      font-weight: 550;
      border: 1px solid transparent;
      width: 100px;
      height: 30px;
      border-radius: 5px;
      transition: all 0.3s ease;
      padding: 5px 8px;
    }

    .btn:hover {
      background-color: #f39d00;
      color: #fff;
      font-size: 0.92rem;
      font-weight: 570;
      border: 1px solid transparent;
      padding: 5px 8px;
      border-radius: 5px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transform: translateY(-5px) scale(1.02);
    }

    .order-summary {
      background-color: #cac3c3ff;
      padding: 20px;
      border-radius: 10px;
      height: fit-content;
      position: sticky;
      top: 20px;
    }

    .order-summary h2 {
      font-size: 1.4rem;
      margin-bottom: 20px;
      border-bottom: 2px solid #f39d00;
      padding-bottom: 10px;
    }

    .order-summary>div {
      display: flex;
      justify-content: space-between;
      margin: 15px 0;
      font-size: 1rem;
    }

    .order-summary>div:last-of-type {
      border-top: 2px solid #f39d00;
      padding-top: 15px;
      margin-top: 20px;
      font-weight: 600;
      font-size: 1.1rem;
    }

    .order-summary>p {
      margin-top: 20px;
      font-size: 0.85rem;
      color: #666;
      text-align: center;
    }
  </style>
</head>

<body>
  <?php include 'includes/navbar.php'; ?>
  <section>
    <div>
      <div class="title">
        <h1>Your Cart</h1>
        <h3>Home / Cart</h3>
        <h4>Shopping Cart(number)</h4>
      </div>
  </section>
  <section class="section2">
    <div>
      <?php if (!empty($cart_items)): ?>
        <?php foreach ($cart_items as $item): ?>
          <div class="card-container">
            <div class="left-card">
              <img src="https://i.pinimg.com/1200x/25/d7/a1/25d7a165da71b020112b4972c821ed4a.jpg" width="110px" height="120px" alt="">
              <div class="card-title">
                <h2><?= $item['name'] ?></h2>
              </div>
            </div>
            <div class="right-card">
              <p>Ksh. <?= $item['subtotal'] ?></p>
              <div class="remove">
                <img width="24" height="24" src="https://img.icons8.com/external-glyph-design-circle/66/FAB005/external-Dustbin-seo-web-optimization-solid-design-circle.png" alt="external-Dustbin-seo-web-optimization-solid-design-circle" />
                <a href="cart.php?remove=<?= $item['key'] ?>">Remove</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <h2>Cart is empty</h2>
      <?php endif; ?>

      <div class="actions">
        <a href="shop.php" style="color: blue; font: size 0.8rem;">Continue Shopping></a>
        <a href="checkout.php" class="btn">Check Out</a>
      </div>
    </div>

    <div class="order-summary">
      <h2>Order Summary</h2>
      <div>
        <p>Subtotal</p>
        <p>Ksh. <?= $total ?></p>
      </div>

      <div>
        <p>VAT</p>
        <p>16%</p>
      </div>

      <div>
        <p>Total</p>
        <p>Ksh.40000</p>
      </div>

      <p>Free Shipping for goods over Ksh.5000</p>
    </div>
  </section>
  <?php include 'includes/footer.php'; ?>
  <script src="assets/js/main.js"></script>
</body>

</html>