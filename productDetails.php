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
  <link rel="stylesheet" href="./styles.css" />
  <title>Ecommerce Website</title>
</head>

<body>
 
  <!-- Navigation -->
  <nav class="nav">
    <div class="wrapper container">
      <div class="logo"><a href="">WOMEN'S SHOES</a></div>
      <ul class="nav-list">
        <div class="top">
          <label for="" class="btn close-btn"><i class="fas fa-times"></i></label>
        </div>
        <li><a href="index.html">Faqja Kryesore</a></li>
        <li><a href="produktet.html">Produktet</a></li>
        <li><a href="loginForm.html">Kyçu</a></li>
        <li><a href="#footer">Rreth Nesh</a></li>
        <li><a href="#footer">Kontakti</a></li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

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
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>INFORMACIONE</h3>
          <a href="#">Rreth Nesh</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Harta e Faqes</a>
        </div>
        <div class="footer-center">
          <h3>LLOGARIA IME</h3>
          <a href="#">Llogaria ime</a>
          <a href="#">Lista e dëshirave</a>
        </div>
        <div class="footer-center">
          <h3>KONTAKTI</h3>
          <div>
              <i class="fas fa-map-marker-alt"></i>
            Prishtinë
          </div>
          <div>
              <i class="far fa-envelope"></i>
            company@gmail.com
          </div>
          <div>
              <i class="fas fa-phone"></i>
            049-123-456
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <script src="./index.js"></script>
</body>
</html>