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
  <link rel="stylesheet" href="assets/css/styles.css" />
  <style>
    html {
      scroll-behavior: smooth;
    }

    :root {
      --font-primary: "Roboto", sans-serif;
      --font-secondary: "Montserrat", serif;
      --primary-color: #f39d00;
      --dark-bg: rgba(22, 7, 7, 0.95);
      --card-bg: rgba(34, 13, 13, 0.85);
      --button-color: #c07e03;
      --button-hover: #d68f04;
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

    /* Container */
    .container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
        url("https://i.pinimg.com/736x/95/fc/85/95fc853a0d4af8cf0ccbf90e7673fa96.jpg") no-repeat center/cover;
      max-width: 1200px;
      width: calc(100% - 2rem);
      min-height: 90vh;
      padding: 3.5rem 5% 5rem;
      margin: 1rem auto;
      display: flex;
      justify-content: flex-end;
      flex-direction: column;
      border: 1.8px solid var(--primary-color);
      border-radius: 20px;
      color: #fff;
    }

    section {
      opacity: 0;
      transform: translateY(50px);
      transition: all 1.5s ease;
    }

    section.show {
      opacity: 1;
      transform: translateY(0);
    }

    .hero-content h1 {
      font-size: clamp(1.8rem, 5vw, 2.5rem);
      margin-bottom: 1rem;
      line-height: 1.2;
    }

    .hero-content p {
      line-height: 1.6;
      font-weight: 400;
      margin-bottom: 2.5rem;
      font-size: clamp(0.9rem, 2vw, 1rem);
    }

    .hero-btn {
      margin-bottom: 2rem;
      display: flex;
      flex-wrap: wrap;
      gap: 1.2rem;
    }

    .collection,
    .arrivals {
      font-size: clamp(0.85rem, 2vw, 0.9rem);
      font-weight: 550;
      border: 1px solid transparent;
      border-radius: 5px;
      transition: all 0.3s ease;
      cursor: pointer;
      padding: 0.8rem 1.8rem;
      white-space: nowrap;
    }

    .collection {
      background-color: var(--primary-color);
      color: #fff;
    }

    .arrivals {
      background-color: whitesmoke;
      color: #000;
    }

    .collection:hover,
    .arrivals:hover {
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
      transform: translateY(-3px) scale(1.03);
    }

    .hero-icons {
      display: flex;
      flex-wrap: wrap;
      gap: clamp(2rem, 10vw, 5rem);
      color: #fce80a;
      font-weight: 800;
    }

    .hero-icons div {
      text-align: center;
    }

    .hero-icons img {
      width: clamp(24px, 5vw, 30px);
      height: clamp(24px, 5vw, 30px);
    }

    .hero-icons h2 {
      font-size: clamp(1.2rem, 3vw, 1.5rem);
      margin: 0.5rem 0 0.2rem;
    }

    .hero-icons p {
      font-size: clamp(0.8rem, 2vw, 0.9rem);
      margin: 0;
    }

    .container h4 {
      text-align: center;
      margin: 2rem auto;
      font-size: clamp(0.75rem, 2vw, 0.85rem);
      padding: 0 1rem;
      max-width: 800px;
    }

    /* Section Titles */
    .sect2 {
      margin: 2rem auto;
      padding: 0 1rem;
      font-size: clamp(1.2rem, 3vw, 1.4rem);
      text-align: left;
      max-width: 1200px;
    }

    /* Categories */
    .categories {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      width: 100%;
      padding: 2rem 1rem;
      margin: 0 auto;
    }

    /* Card Container */
    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      width: 100%;
      padding: 2rem 1rem;
      margin: 0 auto;
    }

    .card {
      background-color: var(--card-bg);
      width: 100%;
      min-height: 380px;
      border: 1px solid transparent;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .card:hover {
      cursor: pointer;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      transform: translateY(-8px) scale(1.02);
    }

    .card-content {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      color: rgba(245, 245, 245, 0.95);
      padding: 1.2rem;
      min-height: 180px;
      flex: 1;
    }

    .card-content:hover {
      color: rgba(254, 254, 254, 1);
    }

    .card-content h2 {
      font-size: clamp(0.95rem, 2vw, 1.05rem);
      margin-bottom: 0.6rem;
      line-height: 1.3;
    }

    .card-content p {
      font-size: clamp(0.85rem, 1.5vw, 0.9rem);
      margin-bottom: 0.8rem;
      line-height: 1.5;
    }

    .card-content button {
      width: 100%;
      max-width: 150px;
      padding: 0.7rem 1.2rem;
      background-color: var(--button-color);
      border: 1px solid transparent;
      border-radius: 10px;
      color: #fff;
      font-weight: 700;
      transition: all 0.3s ease;
      font-size: clamp(0.85rem, 1.5vw, 0.9rem);
      cursor: pointer;
      margin-top: auto;
    }

    .card-content button:hover {
      background-color: var(--button-hover);
      transform: scale(1.05);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .image {
      overflow: hidden;
    }

    .image img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 15px 15px 0 0;
      transition: transform 0.3s ease;
    }

    .card:hover .image img {
      transform: scale(1.05);
    }

    /* Banner */
    .banner {
      max-width: 1200px;
      min-height: 120px;
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
        url("https://i.pinimg.com/736x/40/95/f7/4095f7508cc1bf95298871f0c4b2eb38.jpg") no-repeat center/cover;
      border: 1px solid var(--primary-color);
      border-radius: 15px;
      width: calc(100% - 2rem);
      margin: 3rem auto;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem 1.5rem;
    }

    .banner h2 {
      margin: 0;
      font-size: clamp(1.2rem, 4vw, 2rem);
      color: #fff;
      text-align: center;
      line-height: 1.3;
    }

    /* Ads Section */
    .ads {
      max-width: 1200px;
      width: 100%;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      margin: 3rem auto;
      padding: 0 1rem;
    }

    .ad {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 320px;
      border-bottom: 2px solid var(--primary-color);
      border-radius: 15px;
      transition: all 0.3s ease;
      background-size: cover !important;
      background-position: center !important;
      overflow: hidden;
    }

    .ad:hover {
      cursor: pointer;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      transform: translateY(-10px) scale(1.03);
    }

    .ad-inner {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 2rem 1.5rem;
      gap: 1rem;
      text-align: center;
    }

    .p1 {
      font-size: clamp(0.9rem, 2vw, 1rem);
      color: #ccd1c7;
      margin-bottom: 0.5rem;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .ad-inner h2 {
      color: #fff;
      font-size: clamp(1.4rem, 3vw, 1.8rem);
      margin-bottom: 0.5rem;
      line-height: 1.2;
    }

    .ad-inner span {
      color: #d41010;
      font-weight: bold;
      font-size: 1.1em;
    }

    .p2 {
      color: #fff;
      font-size: clamp(0.95rem, 2vw, 1.05rem);
      line-height: 1.4;
    }

    /* Testimonials */
    .testmonials {
      margin: 3rem auto;
      padding: 2rem 1rem;
      max-width: 1200px;
    }

    .testmonials-content h1 {
      text-align: center;
      font-size: clamp(1.5rem, 4vw, 2rem);
      margin-bottom: 1rem;
      line-height: 1.2;
    }

    .testmonials-content p {
      text-align: center;
      margin-bottom: 3rem;
      line-height: 1.6;
      font-weight: 500;
      font-size: clamp(0.9rem, 2vw, 1rem);
      padding: 0 1rem;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    .testmonials-content p br {
      display: block;
    }

    .testmonials-cards-container {
      max-width: 1200px;
      width: 100%;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      margin: 0 auto;
    }

    .testmonials-cards {
      background: var(--dark-bg);
      color: #fff;
      width: 100%;
      padding: 1.5rem;
      border: 1px solid var(--primary-color);
      border-radius: 15px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .testmonials-cards:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .testmonials-cards img {
      max-width: 80px;
      margin-bottom: 0.5rem;
    }

    .testmonials-cards p {
      line-height: 1.6;
      font-weight: 300;
      margin: 1rem 0;
      font-size: clamp(0.85rem, 1.5vw, 0.95rem);
    }

    .customer-info {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-top: 1rem;
    }

    .customer-image {
      border-radius: 50%;
      object-fit: cover;
      width: 50px;
      height: 50px;
      flex-shrink: 0;
    }

    .customer-name {
      font-size: clamp(0.9rem, 1.5vw, 1rem);
      font-weight: 500;
    }

    a {
      text-decoration: none;
    }

    /* Tablet Landscape (max-width: 1024px) */
    @media (max-width: 1024px) {
      .hero {
        min-height: 75vh;
        padding: 3rem 4% 4rem;
      }

      .card-container {
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 1.5rem;
      }

      .categories {
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 1.5rem;
      }

      .ads {
        gap: 1.5rem;
      }

      .ad {
        min-height: 300px;
      }
    }

    /* Tablet Portrait (max-width: 768px) */
    @media (max-width: 768px) {
      body {
        padding: 0.5rem;
      }

      .hero {
        width: 100%;
        min-height: 65vh;
        padding: 2rem 1.5rem;
        margin: 0.5rem 0;
        justify-content: center;
        border-radius: 15px;
      }

      .hero-content {
        margin-bottom: 1.5rem;
      }

      .hero-content p br {
        display: none;
      }

      .hero-btn {
        flex-direction: row;
        width: 100%;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 2rem;
      }

      .collection,
      .arrivals {
        flex: 1;
        min-width: 140px;
        text-align: center;
        padding: 0.7rem 1.2rem;
      }

      .hero-icons {
        justify-content: center;
        gap: 3rem;
        margin-top: 1.5rem;
      }

      .categories {
        grid-template-columns: 1fr;
        gap: 1.2rem;
        padding: 1.5rem 0.5rem;
      }

      .categories>div {
        width: 100%;
        min-height: 180px;
      }

      .card-container {
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 1.5rem;
        padding: 1.5rem 0.5rem;
      }

      .card {
        max-width: 100%;
        min-height: 360px;
      }

      .testmonials-cards-container {
        grid-template-columns: 1fr;
        gap: 1.5rem;
      }

      .testmonials-content p br {
        display: none;
      }

      .ads {
        grid-template-columns: 1fr;
        padding: 0 0.5rem;
        gap: 1.5rem;
      }

      .ad {
        min-height: 280px;
      }

      .banner {
        margin: 2rem auto;
        width: 100%;
        min-height: 100px;
        border-radius: 12px;
      }

      .sect2 {
        text-align: center;
        padding: 0 0.5rem;
      }
    }

    /* Mobile (max-width: 480px) */
    @media (max-width: 480px) {
      body {
        padding: 0.3rem;
      }

      .hero {
        min-height: 55vh;
        padding: 1.5rem 1rem;
        border-radius: 12px;
      }

      .hero-content h1 {
        font-size: 1.6rem;
        margin-bottom: 0.8rem;
      }

      .hero-content p {
        font-size: 0.9rem;
        margin-bottom: 2rem;
      }

      .hero-btn {
        flex-direction: column;
        gap: 0.8rem;
      }

      .collection,
      .arrivals {
        width: 100%;
        padding: 0.7rem 1rem;
      }

      .hero-icons {
        gap: 2rem;
      }

      .categories>div {
        min-height: 160px;
        padding: 1.2rem;
      }

      .card-container {
        grid-template-columns: 1fr;
        gap: 1.2rem;
        padding: 1rem 0;
      }

      .card {
        min-height: 340px;
        border-radius: 12px;
      }

      .card-content {
        padding: 1rem;
      }

      .image img {
        height: 180px;
        border-radius: 12px 12px 0 0;
      }

      .testmonials-cards {
        padding: 1.2rem;
      }

      .customer-image {
        width: 45px;
        height: 45px;
      }

      .ad {
        min-height: 260px;
        border-radius: 12px;
      }

      .banner {
        min-height: 90px;
      }
    }

    /* Small Mobile (max-width: 375px) */
    @media (max-width: 375px) {
      .hero {
        min-height: 50vh;
        padding: 1.2rem 0.8rem;
      }

      .hero-content h1 {
        font-size: 1.4rem;
      }

      .hero-icons {
        gap: 1.5rem;
      }

      .categories>div {
        min-height: 150px;
        padding: 1rem;
      }

      .card {
        min-height: 320px;
      }

      .image img {
        height: 160px;
      }

      .customer-image {
        width: 40px;
        height: 40px;
      }

      .ad {
        min-height: 240px;
      }
    }

    /* Large Desktop (min-width: 1400px) */
    @media (min-width: 1400px) {
      .container {
        max-width: 1600px;
      }

      .hero,
      .categories,
      .card-container,
      .banner,
      .ads,
      .testmonials,
      .sect2 {
        max-width: 1400px;
      }

      .card-container {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 2.5rem;
      }

      .card {
        min-height: 400px;
      }

      .image img {
        height: 220px;
      }
    }

    /* Extra Large Desktop (min-width: 1600px) */
    @media (min-width: 1600px) {

      .container,
      .hero,
      .categories,
      .card-container,
      .banner,
      .ads,
      .testmonials,
      .sect2 {
        max-width: 1600px;
      }

      .card-container {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 3rem;
      }
    }
  </style>
</head>

<body class="container">
  <?php include 'includes/navbar.php'; ?>
  <section>
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
  </section>



  <!--category List-->
  <section>
    <h2 class="sect2">Choose by Category</h2>
    <div class="categories">
      <div><?php include 'categories_tables/laptops.php'; ?></div>
      <div><?php include 'categories_tables/headphones.php'; ?></div>
      <div><?php include 'categories_tables/smartwatch.php'; ?></div>
      <div><?php include 'categories_tables/PC Accessories & Components.php'; ?></div>
    </div>
  </section>

  <!--Featured Products-->
  <section>
    <h2 class="sect2">Featured Products</h2>

    <div class="card-container">
      <?php
      $results = $conn->query('SELECT * FROM featured_products');
      while ($row = $results->fetch_assoc()) {
      ?>
        <div class="card" style="cursor: pointer;" onclick="location.href='details_page.php?add=<?php echo $row['id'];  ?>'">
          <div class="image">
            <img src="<?php echo $row['image']; ?>" style="height:200px; object-fit:cover;">
          </div>
          <div class="card-content">
            <h2><?php echo $row['name'] ?></h2>
            <p><?php echo $row['description'] ?></p>
            <p>ksh.<?php echo $row['price'] ?></p>
            <button type="button" onclick="event.stopPropagation(); window.location='cart.php?add_type=featured_products&add_id=<?php echo $row['id'];  ?>'">Add to Cart</button>
          </div>
        </div>
      <?php }; ?>
    </div>


  </section>


  <!--New Arrivals-->
  <section id="new-arrivals">
    <h2 class="sect2">New Arrivals</h2>
    <div class="card-container">
      <?php
      $results = $conn->query('SELECT * FROM new_arrivals');
      while ($row = $results->fetch_assoc()) {
      ?>
        <div class="card" style="cursor: pointer;" onclick="location.href='details_page.php?add=<?php echo $row['id'];  ?>'">
          <div class="image">
            <img src="<?php echo $row['image']; ?>" style="height:200px; object-fit:cover;">
          </div>
          <div class="card-content">
            <h2><?php echo $row['name'] ?></h2>
            <p><?php echo $row['description'] ?></p>
            <p>ksh.<?php echo $row['price'] ?></p>
            <button type="button" onclick="event.stopPropagation(); window.location='cart.php?add_type=new_arrivals&add_id=<?php echo $row['id'];  ?>'">Add to Cart</button>
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
      <p>At our store, we believe shopping should be simple, enjoyable, and trustworthy. <br> Here’s what our customers have to say about their experience with us.</p>
    </div>
    <div class="testmonials-cards-container">
      <div class="testmonials-cards">
        <img src="assets/five-stars.png" alt="rating" width="80px" height="50px">
        <p>“I’ve shopped from many online stores, but this one truly stands out. The products are high quality, exactly as shown, and delivery was faster than I expected. I love how easy it is to find what I need, and the customer support was patient and helpful throughout the process.”</p>
        <div class="customer-info">
          <img src="https://i.pinimg.com/1200x/97/e1/59/97e159c6c2dcb7d9d0c455e1a4e6287d.jpg" alt="Customer" class="customer-image">
          <span class="customer-name">Sarah Johnson</span>
        </div>

      </div>

      <div class="testmonials-cards">
        <img src="assets/five-stars.png" alt="rating" width="80px" height="50px">
        <p>“I was amazed by how smooth the whole shopping experience was. From browsing to checkout, everything felt effortless. The packaging was neat, and the product exceeded my expectations. I’ve already recommended this store to my friends and family!”</p>
        <div class="customer-info">
          <img src="https://i.pinimg.com/1200x/3e/f3/50/3ef350dc86cc82a092463e5d795654b5.jpg" alt="customer" class="customer-image">
          <span class="customer-name">Ben Kyle</span>
        </div>

      </div>
      <div class="testmonials-cards">
        <img src="assets/five-stars.png" alt="rating" width="80px" height="50px">
        <p>“This store has completely changed how I shop online. The prices are fair, the quality is top-notch, and the team genuinely cares about customer satisfaction. Every order I’ve made has arrived on time, and I can tell they really value their customers.”</p>
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