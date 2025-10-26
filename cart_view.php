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
      --primary-color: #f39d00;
      --card-bg: #cac3c3ff;
      --text-dark: #000;
      --text-muted: #666;
    }

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      background: #fff;
      color: var(--text-dark);
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

    /* Title Section */
    .title {
      margin: 2rem auto 1rem;
      padding: 0 1rem;
      max-width: 1200px;
    }

    .title h1 {
      font-size: clamp(1.5rem, 4vw, 1.9rem);
      margin-bottom: 0.5rem;
    }

    .title h3 {
      font-size: clamp(1rem, 2.5vw, 1.2rem);
      color: var(--text-muted);
      margin-bottom: 0.3rem;
    }

    .title h4 {
      font-size: clamp(0.95rem, 2vw, 1.1rem);
      font-weight: 500;
    }

    /* Section Animation */
    section {
      opacity: 0;
      transform: translateY(50px);
      transition: all 1s ease;
    }

    section.show {
      opacity: 1;
      transform: translateY(0);
    }

    /* Main Section Grid */
    .section2 {
      margin: 2rem auto;
      max-width: 1200px;
      width: calc(100% - 6%);
      display: grid;
      grid-template-columns: 1fr 380px;
      gap: 2.5rem;
      align-items: start;
      padding: 0 1rem;
    }

    /* Cart Items Container */
    .card-container {
      width: 100%;
      min-height: 120px;
      height: auto;
      background-color: var(--card-bg);
      display: flex;
      justify-content: space-between;
      gap: 1.2rem;
      margin: 1.5rem 0;
      padding: 0.8rem;
      border-top: 2px solid var(--primary-color);
      border-right: 2px solid var(--primary-color);
      border-radius: 15px;
      transition: all 0.3s ease;
    }

    .card-container:hover {
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transform: translateY(-2px);
    }

    /* Left Card */
    .left-card {
      display: flex;
      align-items: flex-start;
      gap: 1rem;
      flex: 1;
    }

    .left-card img {
      border-radius: 10px;
      width: 110px;
      height: 120px;
      object-fit: cover;
      flex-shrink: 0;
    }

    .card-title {
      flex: 1;
      padding: 0.5rem 0;
    }

    .card-title h2 {
      font-size: clamp(1rem, 2vw, 1.2rem);
      font-weight: 600;
      line-height: 1.3;
    }

    /* Right Card */
    .right-card {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: flex-end;
      min-height: 100px;
      padding: 0.5rem;
    }

    .right-card p {
      color: var(--text-dark);
      font-size: clamp(1rem, 2vw, 1.1rem);
      font-weight: 600;
      margin: 0;
    }

    .right-card a {
      color: var(--text-dark);
      text-decoration: none;
      font-size: clamp(0.9rem, 1.5vw, 1rem);
      font-weight: 500;
      margin-left: 0.5rem;
      transition: color 0.3s ease;
    }

    .right-card a:hover {
      color: #d41010;
    }

    /* Remove Button */
    .remove {
      display: flex;
      align-items: center;
      gap: 0.3rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .remove:hover {
      transform: translateY(-2px) scale(1.02);
    }

    .remove img {
      width: 24px;
      height: 24px;
      transition: transform 0.3s ease;
    }

    .remove:hover img {
      transform: rotate(10deg);
    }

    /* Actions Section */
    .actions {
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 2rem;
      gap: 1rem;
      flex-wrap: wrap;
    }
 /*attribute selector that targets all a links with a href=shop */
    .actions a[href*="shop"] {
      color: #0066cc;
      font-size: clamp(0.85rem, 1.5vw, 0.95rem);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .actions a[href*="shop"]:hover {
      color: #0052a3;
      text-decoration: underline;
    }

    /* Button */
    .btn {
      background-color: var(--primary-color);
      color: #fff;
      font-size: clamp(0.85rem, 1.5vw, 0.9rem);
      font-weight: 600;
      border: 1px solid transparent;
      padding: 0.7rem 1.5rem;
      border-radius: 8px;
      transition: all 0.3s ease;
      cursor: pointer;
      white-space: nowrap;
      text-decoration: none;
      display: inline-block;
    }

    .btn:hover {
      background-color: #d68f04;
      box-shadow: 0 6px 20px rgba(243, 157, 0, 0.3);
      transform: translateY(-3px) scale(1.03);
    }

    /* Order Summary */
    .order-summary {
      background-color: var(--card-bg);
      padding: 1.5rem;
      border-radius: 15px;
      border: 2px solid var(--primary-color);
      height: fit-content;
      position: sticky;
      top: 80px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .order-summary h2 {
      font-size: clamp(1.2rem, 2.5vw, 1.4rem);
      margin-bottom: 1.2rem;
      border-bottom: 2px solid var(--primary-color);
      padding-bottom: 0.8rem;
    }

    .order-summary>div {
      display: flex;
      justify-content: space-between;
      margin: 1rem 0;
      font-size: clamp(0.9rem, 1.5vw, 1rem);
    }

    .order-summary>div p {
      margin: 0;
    }

    .order-summary>div:last-of-type {
      border-top: 2px solid var(--primary-color);
      padding-top: 1rem;
      margin-top: 1.5rem;
      font-weight: 600;
      font-size: clamp(1rem, 2vw, 1.1rem);
      color: #000;
    }

    .order-summary>p {
      margin-top: 1.5rem;
      font-size: clamp(0.8rem, 1.5vw, 0.85rem);
      color: var(--text-muted);
      text-align: center;
      line-height: 1.4;
    }

    /* Empty Cart */
    .empty-cart {
      text-align: center;
      padding: 3rem 1rem;
    }

    .empty-cart h2 {
      font-size: clamp(1.2rem, 3vw, 1.5rem);
      color: var(--text-muted);
    }

    /* Tablet Landscape (max-width: 1024px) */
    @media (max-width: 1024px) {
      .section2 {
        grid-template-columns: 1fr 340px;
        gap: 2rem;
        width: calc(100% - 4%);
      }

      .order-summary {
        padding: 1.3rem;
      }
    }

    /* Tablet Portrait (max-width: 768px) */
    @media (max-width: 768px) {
      .section2 {
        grid-template-columns: 1fr;
        gap: 2rem;
        width: calc(100% - 4%);
      }

      .order-summary {
        position: static;
        max-width: 100%;
        margin-top: 1rem;
      }

      .card-container {
        flex-direction: column;
        min-height: auto;
        padding: 1rem;
      }

      .left-card {
        width: 100%;
      }

      .right-card {
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        min-height: auto;
        padding: 0;
      }

      .remove {
        order: 2;
      }

      .right-card p {
        order: 1;
      }

      .actions {
        flex-direction: column-reverse;
        gap: 1rem;
      }

      .btn {
        width: 100%;
        text-align: center;
      }

      .actions a[href*="shop"] {
        width: 100%;
        text-align: center;
      }
    }

    /* Mobile (max-width: 480px) */
    @media (max-width: 480px) {
      .title {
        margin: 1.5rem auto 0.8rem;
      }

      .section2 {
        margin: 1.5rem auto;
        width: calc(100% - 2%);
        padding: 0 0.5rem;
      }

      .card-container {
        margin: 1rem 0;
        padding: 0.8rem;
        border-radius: 12px;
      }

      .left-card {
        gap: 0.8rem;
      }

      .left-card img {
        width: 90px;
        height: 100px;
        border-radius: 8px;
      }

      .card-title h2 {
        font-size: 1rem;
      }

      .right-card {
        flex-direction: row;
        gap: 0.5rem;
      }

      .right-card p {
        font-size: 1rem;
      }

      .remove img {
        width: 20px;
        height: 20px;
      }

      .right-card a {
        font-size: 0.9rem;
      }

      .order-summary {
        padding: 1.2rem;
        border-radius: 12px;
      }

      .order-summary h2 {
        font-size: 1.2rem;
        margin-bottom: 1rem;
      }

      .order-summary>div {
        margin: 0.8rem 0;
      }

      .btn {
        padding: 0.6rem 1.2rem;
        border-radius: 6px;
      }
    }

    /* Small Mobile (max-width: 375px) */
    @media (max-width: 375px) {
      .section2 {
        width: 98%;
      }

      .card-container {
        padding: 0.7rem;
      }

      .left-card img {
        width: 80px;
        height: 90px;
      }

      .card-title h2 {
        font-size: 0.95rem;
      }

      .right-card p {
        font-size: 0.95rem;
      }

      .order-summary {
        padding: 1rem;
      }
    }

    /* Large Desktop (min-width: 1400px) */
    @media (min-width: 1400px) {
      .section2 {
        max-width: 1400px;
        grid-template-columns: 1fr 420px;
        gap: 3rem;
      }

      .order-summary {
        padding: 2rem;
      }

      .card-container {
        margin: 2rem 0;
      }
    }

    /* Extra Large Desktop (min-width: 1600px) */
    @media (min-width: 1600px) {
      .section2 {
        max-width: 1600px;
      }
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
              <img src="<?= $item['image'] ?>" width="110px" height="120px" alt="">
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