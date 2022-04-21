<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!-- Glidejs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css" />
  <title>Ecommerce Website</title>
</head>

<body>

  <!-- Navigation -->
  <?php include './includeParts/header.php' ?>

  <div class="hero">
    <div class="left">
      <span>Oferta Ekskluzive</span>
      <h1>DERI NË 50% ZBRITJE</h1>
      <small>Përfitoni nga të gjitha ofertat eksluzive sezonale</small>
      <a href="#collections">Shiko Koleksionet</a>
    </div>
    <div class="right">
      <img src="./img/icon1.png" alt="" />
    </div>
  </div>


  <!--PROMOTIONS-->
  <section class="section promotion">
    <div class="title">
      <h2>Koleksionet</h2>
    </div>

    <div class="promotion-layout container">
          <?php
          $conn = mysqli_connect('localhost', 'root','','womenshoes');
          $query = "SELECT * FROM promotion";
          $run = mysqli_query($conn, $query);

          if(mysqli_num_rows($run) > 0){
            while($row = mysqli_fetch_array($run)){
              $image = $row['promo_image'];
              $title = $row['promo_title'];
              $text = $row['promo_text'];
              ?>
              <div class="promotion-item">
                <img src="./img/<?php echo $image;?>" alt="" />
                <div class="promotion-content">
                  <h3><?php echo $title;?></h3>
                  <a href=""><?php echo $text;?></a>
                </div>
              </div>
              <?php
            }
          }
          ?>
    </div>
  </section>





  <!--PRODUKTET-->
  <section class="section products">
    <div class="title">
      <h2>Produktet e Reja</h2>
    </div>
    
    <div class="product-layout">
          <?php
          require_once '../controllers/ProductController.php';
          $products = new ProductController;
          $all = $products->readData();
          for($i = count($all)-1; $i >= count($all)-8 ; $i--) {

              ?>
              <div class="product">
                <div class="img-container">
                  <img src="./img/<?php echo $all[$i] ['product_image'];?>" alt="" />
                  <div class="addCart">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                </div>
                <div class="bottom">
                  <a href="productDetails.php"><?php echo $all[$i] ['product_name'];?></a>
                  <div class="price">
                    <span><?php echo $all[$i] ['product_price'];?></span>
                  </div>
                </div>
              </div>
              
            <?php
            }
          ?>
    </div>
  </section>


  <section class="section advert">
    <div id="collections" class="advert-layout container">
      <div class="item ">
        <img src="./img/promo7.png" alt="">
        <div class="content left">
          <span>Çmime eksluzive</span>
          <h3>Koleksioni Dimëror</h3>
          <span>Shiko Koleksionin</span>
        </div>
      </div>
      <div class="item">
        <img src="./img/promo8.png" alt="">
        <div class="content  right">
          <span>Trendet e Reja</span>
          <h3>Brendet e Atleteve</h3>
          <span>Blej tani </span>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include './includeParts/footer.php' ?>
  
  <script src="./js/index.js"></script>
</body>
</html>