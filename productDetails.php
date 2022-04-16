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

  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details container">
      <div class="left">
        <div class="main">
          <img src="img/product1.png" alt="" />
        </div>
      </div>
      <div class="right">
        <h1>Emri i Produktit</h1>
        <div class="price">100 €</div>
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
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero minima
          delectus nulla voluptates nesciunt quidem laudantium, quisquam
          voluptas facilis dicta in explicabo, laboriosam ipsam suscipit!
        </p>
      </div>
  </section>


  <!-- Footer -->
  <?php include 'includeParts/footer.php' ?>
  
  <script src="./js/index.js"></script>
</body>
</html>