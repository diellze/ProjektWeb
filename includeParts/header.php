<nav class="nav">
    <div class="wrapper container">
      <div class="logo"><a href="">WOMEN'S SHOES</a></div>
      <ul class="nav-list">
        <div class="top">
          <label for="" class="btn close-btn"><i class="fas fa-times"></i></label>
        </div> 
        <?php
        if(isset($_SESSION['Roli']) && $_SESSION['role'] == 1){ ?>
        <li><a href="../dashboard.php">Dashboard</a></li>
        <?php } ?>
        <li><a href="../pages/index.php">Faqja Kryesore</a></li>
        <li><a href="../pages/produktet.php">Produktet</a></li>
        <li><a href="../user/loginForm.php">Kyçu</a></li>
        <li><a href="../pages/aboutUsPage.php">Rreth Nesh</a></li>
        <li><a href="../pages/contactUs.php">Na Kontaktoni</a></li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
</nav>