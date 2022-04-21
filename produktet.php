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
  <link rel="stylesheet" href="./css/styles.css" />
  <title>Ecommerce Website</title>
</head>

<body>

  <!-- Navigation -->
  <?php include 'includeParts/header.php' ?>

  <!-- PRODUCTS -->

  <section class="section products">
    <div class="products-layout container">
      <div class="col-1-of-4">
        <div>
          <div class="block-title">
            <h4 style="font-size: 20px">Kategoritë</h4>
          </div>
          <ul class="block-content">
            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Atlete</span>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Çizme</span>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Këpucë</span>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Sandale</span>
              </label>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-3-of-4">
        <form action="">
          <div class="item">
          </div>
          <a href="">Filtro produktet</a>
        </form>


        <!--PRODUKTET-->
        <div class="product-layout">
          <?php
          $conn = mysqli_connect('localhost', 'root','','womenshoes');
          $query = "SELECT * FROM product";
          $run = mysqli_query($conn, $query);

          if(mysqli_num_rows($run) > 0){
            while($row = mysqli_fetch_array($run)){
              $image = $row['product_image'];
              $name = $row['product_name'];
              $price = $row['product_price'];
              $desc = $row['product_description'];

              ?>
              <div class="product">
                <div class="img-container">
                  <img src="img/<?php echo $image;?>" alt="" />
                  <div class="addCart">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                </div>
                <div class="bottom">
                  <a href="productDetails.php"><?php echo $name;?></a>
                  <div class="price">
                    <span><?php echo $price;?></span>
                  </div>
                </div>
              </div>
              
            <?php
            }
          }
          ?>
        

        <ul class="pagination">
          <span>1</span>
          <span>2</span>
          <span class="icon">></span>
        </ul>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'includeParts/footer.php' ?>
  
  <script src="./js/index.js"></script>
</body>
</html>