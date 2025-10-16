<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>My PHP E-commerce</title>
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

    .hero {
      background: url("https://i.pinimg.com/736x/9b/92/aa/9b92aa2780d8ac753f7f1bb05fc11f53.jpg") no-repeat center/cover;
      max-width: 1200px;
      width: 100%;
      min-height: 100vh;
      padding: 3.5rem 3% 5rem;
      margin: 0 3% 1%;
      display: flex;
      justify-content: flex-end;
      flex-direction: column;
      border: 1.8px solid #f39d00;
      border-radius: 20px;
      color: #fff;
    }

    .hero-content h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .hero-content p {
      line-height: 20px;
      font-weight: 400;
      margin-bottom: 40px;
    }

    .hero-btn {
      margin-bottom: 30px;
      display: flex;
      gap: 20px;
    }

    .collection {
      background-color: #f39d00;
      color: #fff;
      font-size: 0.9rem;
      font-weight: 550;
      border: 1px solid transparent;
      width: 200px;
      height: 40px;
      border-radius: 5px;
      transition: all 0.2s ease;
    }

    .collection:hover {
      background-color: #f39d00;
      color: #fff;
      font-size: 0.92rem;
      font-weight: 570;
      border: 1px solid transparent;
      width: 202px;
      height: 42px;
      border-radius: 5px;
    }

    .arrivals {
      background-color: whitesmoke;
      color: #000;
      font-size: 0.9rem;
      font-weight: 550;
      border: 1px solid transparent;
      width: 150px;
      height: 40px;
      border-radius: 5px;
    }

    .arrivals:hover {
      background-color: whitesmoke;
      color: #000;
      font-size: 0.92rem;
      font-weight: 570;
      border: 1px solid transparent;
      width: 152px;
      height: 42px;
      border-radius: 5px;
    }

    .hero-icons {
      display: flex;
      flex-direction: row;
      gap: 90px;
      color: #fce80aff;
      font-weight: 800;
    }

    .container h4 {
      text-align: center;
      margin-top: 3%;
      font-size: 0.85rem;
    }

    /*categories*/

    .categories {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 2rem;
      max-width: 1200px;
      width: 100%;
      padding: 2rem 3%;
      margin: 0 3% 1%;
    }

    /*====featured products====*/
    .card-container {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 1rem;
      max-width: 1200px;
      width: 100%;
      padding: 2rem 3%;
      margin: 0 auto;
    }

    .card {
      background-color: rgba(34, 13, 13, 0.85);
      max-width: 220px;
      width: 100%;
      min-height: 300px;
      height: auto;
      border: 1px solid transparent;
      border-radius: 20px 10px 10px 20px;
      box-shadow: 1px 1px 3px grey, -1px -1px 3px grey;
      transition: all 0.1s ease;
    }

    .card:hover {
      width: 100%;
      max-width: 221px;
      min-height: 302px;
      height: auto;
      border: 1px solid transparent;
      border-radius: 20px 10px 10px 20px;
      box-shadow: 1.2px 1.2px 1.8px grey, -1.2px -1.2px 1.8px grey;

    }

    .card-content {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      color: rgba(245, 245, 245, 0.95);
      transition: all 0.1s ease;

    }

    .card-content:hover {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      gap: 0;
      color: rgba(254, 254, 254, 1);
    }

    .card-content h2 {
      font-size: 1rem;
      margin: 12px;
      text-align: left;

    }


    .card-content p {
      font-size: 0.9rem;
      margin: 0 0 14px 12px;
      text-align: left;

    }

    .card-content button {
      width: 120px;
      height: 28px;
      margin-left: 12px;
      background-color: #c07e03ff;
      border: 1px solid transparent;
      border-radius: 10px;
      color: #fff;
      font-weight: 700;
      transition: all 0.1s ease;
      font-size: 0.9rem;
    }

    .card-content button:hover {
      width: 122px;
      height: 30px;
      margin-left: 12px;
      background-color: #c07e03ff;
      border: 1px solid transparent;
      border-radius: 10px;
      color: #fff;
      font-weight: 750;
      font-size: 0.92rem;
    }

    .image img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 20px 10px 0 0;
    }

    .banner{
      max-width: 1200px;
      width: 100%;
      height: 70px;
      background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("https://i.pinimg.com/736x/40/95/f7/4095f7508cc1bf95298871f0c4b2eb38.jpg") no-repeat center/cover;
    }
  </style>
</head>

<body class="container">
  <?php include 'includes/navbar.php'; ?>

  <h4>FREE DELIVERY On Products over 5000</h4>
  <section class="hero" id="#">
    <div class="hero-content">
      <h1>Redefine What’s Possible.</h1>
      <p>Discover premium gadgets that combine style, speed, <br>and innovation — all in one place.</p>
    </div>

    <div class="hero-btn">
      <a href="#"><button class="collection">Explore Our Collection</button></a>
      <a href="#"><button class="arrivals">New Arrivals</button></a>
    </div>

    <div class="hero-icons">
      <div>
        <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/fce80a/group.png" alt="group" />
        <h2>5k</h2>
        <p>users</p>
      </div>
      <div>
        <img width="30" height="30" src="https://img.icons8.com/material-rounded/24/fce80a/grid-2.png" alt="grid-2" />
        <h2>1000+</h2>
        <p>Products</p>
      </div>
    </div>
  </section>

  <!--category List-->
  <section class="categories">
    <div><?php include 'categories_tables/laptops.php'; ?></div>
    <div><?php include 'categories_tables/headphones.php'; ?></div>
    <div><?php include 'categories_tables/smartwatch.php'; ?></div>
    <div><?php include 'categories_tables/PC Accessories & Components.php'; ?></div>
  </section>
  <!--Products List-->
  <div class="card-container">
    <?php
    $results = $conn->query('SELECT * FROM featured_products');
    while ($row = $results->fetch_assoc()) {
    ?>
      <div class="card">
        <div class="image">
          <img src="<?php echo $row['image']; ?>" style="height:200px; object-fit:cover;">
        </div>
        <div class="card-content">
          <h2><?php echo $row['name'] ?></h2>
          <p><?php echo $row['description'] ?></p>
          <p>ksh.<?php echo $row['price'] ?></p>
          <button>Add to Cart</button>
        </div>
      </div>
    <?php }; ?>
  </div>

  <!--New Arrivals-->
  <div class="card-container">
    <?php
    $results = $conn->query('SELECT * FROM new_arrivals');
    while ($row = $results->fetch_assoc()) {
    ?>
      <div class="card">
        <div class="image">
          <img src="<?php echo $row['image']; ?>" style="height:200px; object-fit:cover;">
        </div>
        <div class="card-content">
          <h2><?php echo $row['name'] ?></h2>
          <p><?php echo $row['description'] ?></p>
          <p>ksh.<?php echo $row['price'] ?></p>
          <button>Add to Cart</button>
        </div>
      </div>
    <?php }; ?>
  </div>

  <!--banner-->
      <section class="banner">
        <div>
          <h2>#Shop our Premium collection</h2>
        </div>
      </section>

  <?php include 'includes/footer.php'; ?>
  <script src="assets/js/main.js"></script>
</body>

</html>