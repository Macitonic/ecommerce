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
      background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("https://i.pinimg.com/736x/95/fc/85/95fc853a0d4af8cf0ccbf90e7673fa96.jpg") no-repeat center/cover;
      max-width: 1200px;
      width: 100%;
      min-height: 90vh;
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
      margin: 0 3%;
    }

    /*====featured products & new arrivals====*/
    .card-container {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 1rem;
      max-width: 1200px;
      width: 100%;
      margin: 0 3%;
      padding: 1.5% 0;
    }

    section>h2 {
      margin: 0;
      padding: 0.6rem 3%;
      font-size: 1.4rem;
      text-align: left;
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

    .banner {
      max-width: 1200px;
      height: 120px;
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("https://i.pinimg.com/736x/40/95/f7/4095f7508cc1bf95298871f0c4b2eb38.jpg") no-repeat center/cover;
      border: 1px solid #f39d00;
      border-radius: 15px;
      max-width: 1200px;
      width: 100%;
      margin: 3%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-sizing: border-box;
      padding: 1.5rem;
    }

    .banner h2 {
      margin: 0;
      font-size: 2rem;
      color: #fff;
    }

    .ads {
      max-width: 1200px;
      width: 100%;
      display: flex;
      justify-content: center;
      gap: 10px;
      margin: 3%;
    }

    .ad-inner>* {
      margin: 0;
    }

    .ad {
      display: flex;
      align-items: center;
      justify-content: center;
      min-width: 250px;
      width: 100%;
      min-height: 250px;
      height: 100%;
      border-bottom: 1px solid #f39d00;
      border-radius: 10px;

    }

    .add-inner {
      display: flex;
      flex-direction: column;
      align-items: center;
      align-items: center;
      padding: 2rem 1rem;
      gap: 50px;
    }

    .p1 {
      font-size: 18px;
      color: #ccd1c7ff;
      text-align: center;
      margin-bottom: 10px;
    }

    .ad-inner h2 {
      color: #fff;
      font-size: 1.8rem;
      text-align: center;
      margin-bottom: 10px;
    }

    .ad-inner span {
      color: #d41010ff;

    }

    .p2 {
      color: #fff;
      text-align: center;
    }

    .testmonials {
      margin: 2% 3%;
      padding: 2rem 1rem;

    }

    .testmonials-content h1 {
      text-align: center;
      border-bottom: 20px;
    }

    .testmonials-content p {
      text-align: center;
      margin-bottom: 60px;
      line-height: 1.5rem;
      font-weight: 500;
    }

    .testmonials-cards-container {
      max-width: 1200px;
      width: 100%;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin: 1% auto;
      padding: 0 1.5rem;
    }

    .testmonials-cards {
      background: rgba(22, 7, 7, 0.95);
      color: #fff;
      width: 100%;
      height: auto;
      padding: 1.2rem;
      border: 1px solid #f39d00;
      border-radius: 10px;
    }

    .testmonials-cards p {
      line-height: 1.5rem;
      font-weight: 300;
      margin-bottom: 20px;
    }

    .customer-info {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 16px;
    }

    .customer-image {
      border-radius: 100%;
      object-fit: cover;
      width: 60px;
      height: 60px;
    }

    section a {
      text-decoration: none;
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
      <a href="shop.php"><button class="collection">Explore Our Collection</button></a>
      <a href="#new-arrivals"><button class="arrivals">New Arrivals</button></a>
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
  <section>
    <h2>Choose by Category</h2>
    <div class="categories">
      <div><?php include 'categories_tables/laptops.php'; ?></div>
      <div><?php include 'categories_tables/headphones.php'; ?></div>
      <div><?php include 'categories_tables/smartwatch.php'; ?></div>
      <div><?php include 'categories_tables/PC Accessories & Components.php'; ?></div>
    </div>
  </section>

  <!--Featured Products-->
  <section>
    <h2>Featured Products</h2>

    <div class="card-container">
      <?php
      $results = $conn->query('SELECT * FROM featured_products');
      while ($row = $results->fetch_assoc()) {
      ?>
        <div class="card" style="cursor: pointer;" onclick="location.href='details_page.php'">
          <div class="image">
            <img src="<?php echo $row['image']; ?>" style="height:200px; object-fit:cover;">
          </div>
          <div class="card-content">
            <h2><?php echo $row['name'] ?></h2>
            <p><?php echo $row['description'] ?></p>
            <p>ksh.<?php echo $row['price'] ?></p>
            <button type="button" onclick="event.stopPropagation(); window.location='cart.php?add_type=featured_products&add_id=<?php echo $row['id']; ?>'">Add to Cart</button>
          </div>
        </div>
      <?php }; ?>
    </div>


  </section>


  <!--New Arrivals-->
  <section id="new-arrivals">
    <h2>New Arrivals</h2>
    <div class="card-container">
      <?php
      $results = $conn->query('SELECT * FROM new_arrivals');
      while ($row = $results->fetch_assoc()) {
      ?>
        <div class="card" style="cursor: pointer;" onclick="location.href='details_page.php'">
          <div class="image">
            <img src="<?php echo $row['image']; ?>" style="height:200px; object-fit:cover;">
          </div>
          <div class="card-content">
            <h2><?php echo $row['name'] ?></h2>
            <p><?php echo $row['description'] ?></p>
            <p>ksh.<?php echo $row['price'] ?></p>
            <button type="button" onclick="event.stopPropagation(); window.location='cart.php?add_type=new_arrivals&add_id=<?php echo $row['id']; ?>'">Add to Cart</button>
          </div>
        </div>
      <?php }; ?>
    </div>
  </section>


  <!--banner-->
  <section class="banner">
    <div>
      <h2>#Shop our Premium collection</h2>
    </div>
  </section>

  <!--Ad section-->
  <section class="ads">
    <div class="ad" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.pinimg.com/1200x/77/f4/42/77f4420a876c94d75a7687491b5b1e62.jpg') no-repeat center/cover;">
      <div class="ad-inner">
        <p class="p1">Limited Time Offer</p>
        <h2>Laptop Collection</h2>
        <p class="p2">Up to <span>50%</span> off on selected items</p>
      </div>
    </div>

    <div class="ad" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.pinimg.com/736x/5d/58/a9/5d58a98dd1f1bca98643bd10c8ec9e13.jpg') no-repeat center/cover;">
      <div class="ad-inner">
        <p class="p1">Trending</p>
        <h2>Watch Collection</h2>
        <p class="p2">Up to <span style="color: #d41010ff; text-align:center;">30%</span> off on selected items</p>
      </div>
    </div>
  </section>

  <!--Testmonials section-->
  <section class="testmonials">
    <div class="testmonials-content">
      <h1>What our customers say about us</h1>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis eligendi voluptas esse sunt Dolorum earum, <br>omnis beatae aliquam ipsa ut veniam eius laboriosam, odit ducimus fugiat</p>
    </div>
    <div class="testmonials-cards-container">
      <div class="testmonials-cards">
        <img src="assets/five-stars.png" alt="rating" width="80px" height="50px">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum earum, omnis beatae aliquam ipsa ut veniam eius laboriosam, odit ducimus fugiat voluptas commodi dolor maiores eos expedita? Commodi, inventore accusamus.</p>
        <div class="customer-info">
          <img src="https://i.pinimg.com/1200x/97/e1/59/97e159c6c2dcb7d9d0c455e1a4e6287d.jpg" alt="Customer" class="customer-image">
          <span class="customer-name">Sarah Johnson</span>
        </div>

      </div>

      <div class="testmonials-cards">
        <img src="assets/five-stars.png" alt="rating" width="80px" height="50px">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum earum, omnis beatae aliquam ipsa ut veniam eius laboriosam, odit ducimus fugiat voluptas commodi dolor maiores eos expedita? Commodi, inventore accusamus.</p>
        <div class="customer-info">
          <img src="https://i.pinimg.com/1200x/3e/f3/50/3ef350dc86cc82a092463e5d795654b5.jpg" alt="customer" class="customer-image">
          <span class="customer-name">Ben Kyle</span>
        </div>

      </div>
      <div class="testmonials-cards">
        <img src="assets/five-stars.png" alt="rating" width="80px" height="50px">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum earum, omnis beatae aliquam ipsa ut veniam eius laboriosam, odit ducimus fugiat voluptas commodi dolor maiores eos expedita? Commodi, inventore accusamus.</p>
        <div class="customer-info">
          <img src="https://i.pinimg.com/736x/b4/1f/db/b41fdb180c124f3f3f8e2791e0019715.jpg" alt="customer" class="customer-image">
          <span class="customer-name">Brian Davis</span>
        </div>
      </div>
    </div>
  </section>
  <?php include 'includes/footer.php'; ?>
  <script src="assets/js/main.js"></script>
</body>

</html>