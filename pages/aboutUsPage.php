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
        <link rel="stylesheet" href="../css/slider.css" />

        <!-- Custom StyleSheet -->
        <link rel="stylesheet" href="../css/styles.css" />
        <title>Ecommerce Website</title>
        <style>
            .btn{
                display: flex; 
                justify-content: center;
            }

            button{
                width: 150px;
                height: 40px;
                background-color:skyblue;
                border-style:none;
                font-size: 15px;
                margin-top: 100px;
                color: white;
                cursor: pointer;
                transition: all 0.7s ease;
                text-align: center;
                border-style: none;
                border-radius: 5px;
                margin-bottom: 15px;
            }
        </style>
    </head>

    <body>
        <!-- Navigation -->
        <?php include '../includeParts/header.php' ?>

        <div class="hero" style= "background-image:url(../img/shoe.jpg);">
            <div class = "left">
                <h1 style ="align-items: center; text-shadow: 0 3px 6px rgb(0 0 0/ 50%);font-size: 4.2rem; "> Rreth Nesh</h1>
            </div>
        </div>


        <section class="section promotion">
            <div class="title">
              <h2>Rreth <span class = "whoweare" style = "color:#93c1f5;">Nesh </span> </h2>
              <br>
              <p class="aboutUs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil eos odio labore officiis dignissimos ducimus repellendus vero magni, ipsam, libero asperiores minima. Incidunt asperiores alias placeat vero maxime. Voluptatem, vero. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem accusantium necessitatibus obcaecati saepe earum sunt ut, ab vitae voluptas eaque expedita voluptatibus, optio, eligendi vero cupiditate quaerat ipsa sint sit?
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem ipsam debitis numquam totam maiores tempore nostrum, nihil veniam sit rerum cum vitae et eum quae, in doloremque possimus ab eos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum assumenda molestias ab nam nobis non quis doloribus cumque, rerum minima asperiores quae deserunt harum dolor reprehenderit odio, iste amet id? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id debitis culpa, assumenda itaque, vel nemo cupiditate fugit repellat, quidem nesciunt laudantium sequi ab error quos soluta vero asperiores illo beatae!
              </p> 
            </div>
        </section>
  
        <!-- Slider -->
        <?php
        require_once '../controllers/ReviewController.php';
        $review = new ReviewController;
        $all = $review->readData();
        if(count($all)>=4){
        ?>
        
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
  
              <?php
                  for($i = count($all)-1; $i >= count($all)-4 ; $i--) {
              ?>
              <div class="active">
                  <div class="img"><img src="../img/<?php echo $all[$i] ['client_image'];?>"></div>
                      <h2><?php echo $all[$i] ['client_name'];?></h2>
                      <p><?php echo $all[$i] ['client_review'];?></p>
              </div>
              <?php
            }
        }
        ?>    
        
              </div>
          </div>
          <div class="btn">
              <button onclick="window.location.href='../views/create-review.php'">Your own review</button>
          </div>
      </section>

      
    
    <!-- Footer -->
    <?php include '../includeParts/footer.php' ?>
    
    <script src="../js/index.js"></script>
    <script src="../js/slider.js"></script>
    </body>
</html>