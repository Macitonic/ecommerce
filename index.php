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

    .hero {
      background: url("https://i.pinimg.com/736x/9b/92/aa/9b92aa2780d8ac753f7f1bb05fc11f53.jpg") no-repeat center/cover;
      max-width: 1200px;
      width: 100%;
      min-height: 100vh;
      padding: 3.5rem 3% 5rem;
      margin: 0 3% 3%;
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
  <!--Products List-->
  <div class="row">
    <?php
    $result = $conn->query("SELECT * FROM products");
    while ($row = $result->fetch_assoc()) {
    ?>
      <div class="col-md-3">
        <div class="card mb-4">
          <img src="<?php echo $row['image']; ?>" class="card-img-top" style="height:200px; object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['name']; ?></h5>
            <p>Ksh <?php echo $row['price']; ?></p>
            <a href="cart.php?add=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Add to Cart</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <?php include 'includes/footer.php'; ?>
  <script src="assets/js/main.js"></script>
</body>

</html>