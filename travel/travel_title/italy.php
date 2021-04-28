<!DOCTYPE html>
<html lang="en">

<head>

  <?php include '../php templates/head_links.php' ?>

  <meta name="description" />
  <meta name="keywords"
    content="marina, bertolini, marina bertolini, travels, italy, photos, pictures, travel pictures" />

  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <!--collegamento a CSS-->

  <script src="../js/collapse.js" defer></script>
  <!-- Collapsible gallery -->

</head>

<body>

  <?php include '../php templates/nav.php' ?>

  <main>
    <div class="banner"
      style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('../travel/banner/italy.jpg');">
      <h1 class="country_name">Italy</h1>
    </div>

    <div class="travels">
      <img class="travel" src="./travel_title/XXXXXXXXXXXXXXXXXXXXXXX.jpg" alt="">
      <p class="intro">
        
      </p>
    </div>
    <div class="button-container">
      <button type="button" class="collapsible">Gallery</button>
      <div class="content">
        <div class="gallery">
          <div><a href="./travel_pics/panama_2019/1.JPG" data-lightbox="switzerland"
              data-title=""><img src="./travel_pics/panama_2019/1.JPG" alt=""></a></div>
        

        </div>
      </div>
    </div>

    <div class="arrow"><a href="#top"><i class="fas fa-arrow-up"></i></a></div>
  </main>

  <?php include '../php templates/footer.php' ?>

  <?php include '../php templates/bootstrap_script.php' ?>

</body>

</html>