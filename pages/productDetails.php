<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="../css/styles.css" />
  <title>Ecommerce Website</title>
</head>

<body>
 
  <!-- Navigation -->
  <?php include '../includeParts/header.php' ?>

  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details container">

    <?php
          require_once '../controllers/ProductController.php';
          $products = new ProductController;
          $all = $products->readData();
          for($i = count($all)-1; $i >= count($all)-8 ; $i--) {

              ?>
      <div class="left">
        <div class="main">
          <img src="../img/<?php echo $all[$i] ['product_image'];?>" alt="" />
        </div>
      </div>
      <div class="right">
        <h1><?php echo $all[$i] ['product_name'];?></h1>
        <div class="price"><?php echo $all[$i] ['product_price'];?></div>
        <form>
          <div>
            <select>
              <option value="Select Size" selected disabled>
                Zgjedhni numrin
              </option>
              <option value="1">36</option>
              <option value="2">37</option>
              <option value="3">38</option>
              <option value="4">39</option>
              <option value="4">40</option>
              <option value="4">41</option>
            </select>
            <span><i class="fas fa-chevron-down"></i></span>
          </div>
        </form>

        <form class="form">
          <input type="text" placeholder="1" />
          <a href="" class="addCart">Shto në Shportë</a>
        </form>
        <h3>Detajet e Produktit</h3>
        <p>
         <?php echo $all[$i] ['product_description'];?>
        </p>
        <?php } ?>
      </div>
  </section>


  <!-- Footer -->
  <?php include '../includeParts/footer.php' ?>
  
  <script src="../js/index.js"></script>
</body>
</html>