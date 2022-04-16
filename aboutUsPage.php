<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

        <script type="text/javascript" src="js/slider.js"></script>
        <link rel="stylesheet" href="./css/slider.css" />

        <!-- Custom StyleSheet -->
        <link rel="stylesheet" href="./css/styles.css" />
        <title>Ecommerce Website</title>
    </head>

    <body>
        <!-- Navigation -->
        <?php include 'includeParts/header.php' ?>

        <section class="section promotion">
            <div class="title">
              <h2>Rreth Nesh</h2>
              <p class="aboutUs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil eos odio labore officiis dignissimos ducimus repellendus vero magni, ipsam, libero asperiores minima. Incidunt asperiores alias placeat vero maxime. Voluptatem, vero. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem accusantium necessitatibus obcaecati saepe earum sunt ut, ab vitae voluptas eaque expedita voluptatibus, optio, eligendi vero cupiditate quaerat ipsa sint sit?
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem ipsam debitis numquam totam maiores tempore nostrum, nihil veniam sit rerum cum vitae et eum quae, in doloremque possimus ab eos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum assumenda molestias ab nam nobis non quis doloribus cumque, rerum minima asperiores quae deserunt harum dolor reprehenderit odio, iste amet id? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id debitis culpa, assumenda itaque, vel nemo cupiditate fugit repellat, quidem nesciunt laudantium sequi ab error quos soluta vero asperiores illo beatae!
              </p> 
            </div>
        </section>
  
        <!-- Slider -->
        <section class="slider" id="slider">
          <section class="section promotion">
            <div class="title">
              <h2>Komentet e klienteve tona</h2>
            </div>
          </section>
          <div class="wrap">
  
              <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
              <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>
  
              <ul class="dots" id="slider-dots">
                  <li class="dot active"></li>
                  <li class="dot"></li>
                  <li class="dot"></li>
                  <li class="dot"></li>
              </ul>
  
              <div class="cont" id="slider-content">
  
                  <div class="active">
                      <div class="img"><img src="img/client1.jpg"></div>
                      <h2>ANNE HATHAWAY</h2>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                         deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores. Lorem 
                         ipsum dolor sit amet consectetur adipisicing elit. Harum adipisci voluptates hic quod vitae nulla 
                         dolorum enim, aperiam vero, voluptas consequatur exercitationem asperiores velit blanditiis suscipit 
                         atque voluptate quidem. </p>
                  </div>
                  
                  <div>
                      <div class="img"><img src="img/client2.jpg"></div>
                      <h2>KATE UPTON</h2>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                          deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
                  </div>
                  
                  <div>
                      <div class="img"><img src="img/client3.jpg"></div>
                      <h2>OLIVIA WILDE</h2>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                          deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
                  </div>
                  
                  <div>
                      <div class="img"><img src="img/client4.jpg"></div>
                      <h2>ASHLEY GREENE</h2>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                        deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores. Lorem 
                        ipsum dolor sit amet consectetur adipisicing elit. Harum adipisci voluptates hic quod vitae nulla 
                        dolorum enim, aperiam vero, voluptas consequatur exercitationem asperiores velit blanditiis suscipit 
                        atque voluptate quidem. </p>
                  </div>
              </div>
          </div>
      </section>
    
    <!-- Footer -->
    <?php include 'includeParts/footer.php' ?>
    
    <script src="./js/index.js"></script>
    <script src="./js/slider.js"></script>
    </body>
</html>