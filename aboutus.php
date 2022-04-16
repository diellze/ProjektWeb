<!DOCTYPE html>
<html>
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
        <link rel="stylesheet" href="./styles.css" />
        <link rel="stylesheet" href="./slider.css" />
        <title>Ecommerce Website</title>
    </head>

    <body>
         
    <!-- Navigation -->
    <?php include 'header.php'?>

    <div class="hero" style="background-image: url('shoe.jpg');">
      <div class="left">
        <h1 style="align-items: center; text-shadow: 0 3px 6px rgb(0 0 0 / 50%);font-size: 4.2rem; line-height: 1.15;">Rreth nesh</h1>
      </div>
    </div>

    <section class="section promotion">
      <div class="title">
          <h1>Rreth <span class="whoweare" style="color: lightblue;"> Nesh </span></h1>
          <p class="aboutUs" style="margin: 150px;">
          Për secilin prej atyre të dashurve të këpucëve atje, 'Emri i Organizatës' ofron objektivin e vetëm për të zgjedhur ndeshjen e duhur të këpucëve. Për të kënaqur dashurinë për këpucët, ne ofrojmë një mori alternativash nga shenjat e këpucëve ngarje, të gjitha nën një çati. Kanë ikur ditët kur ju duhej të shkonit nga dyqani në dyqan për të gjetur stilin dhe madhësinë e duhur për veten tuaj.
          Te 'Organization Name', mund të gjeni një grumbullim të madh këpucësh të shkathëta në të gjitha madhësitë dhe stilet, të gjitha brenda disa fotove.
        </p> 
      </div>
    </section>

    <!-- slider -->


  <section class="testim" id="testim">
    <section class="section promotion">
      <div class="title">
        <h2>Komentet e klienteve tona</h2>
      </div>
    </section>
    <div class="wrap">

        <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
        <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>

        <ul class="dots" id="testim-dots">
            <li class="dot active"></li>
            <li class="dot"></li>
            <li class="dot"></li>
            <li class="dot"></li>
        </ul>

        <div class="cont" id="testim-content">

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
    <?php include 'footer.php'?>
  <script src="./index.js"></script>
  <script src="./slider.js"></script>

    </body>
</html>