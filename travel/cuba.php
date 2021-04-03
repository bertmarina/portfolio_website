<!DOCTYPE html>
<html lang="en">

<head>

  <?php include '../php templates/head_links.php' ?>

  <meta name="description" content="the homepage of my personal website" />
  <meta name="keywords"
    content="marina, bertolini, marina bertolini, travels, balkans, photos, pictures, travel pictures" />

  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <!--collegamento a CSS-->

  <script src="../js/collapse.js" defer></script>
  <!-- Collapsible gallery -->

</head>

<body>

  <?php include '../php templates/nav.php' ?>

  <main>
    <div class="banner" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('../travel/banner/cuba.jpg');">
      <h1 class="country_name">Cuba</h1>
    </div>

    <div class="travels">
      <img class="travel" src="./balkan1.jpg" alt="">
      <p class="intro"></p>
    </div>

    <div class="button-container">
      <button type="button" class="collapsible">Gallery</button>
      <div class="content">
        <div class="gallery">
          <div><a href="./travel_pics/balkan_2008/1.JPG" data-lightbox="balkan_tour" data-title=""><img
                src="./travel_pics/balkan_2008/1.JPG" alt=""></a></div>
        </div>
      </div>
    </div>

    <div class="break"></div>

    <div class="travels">
      <img class="travel" src="./balkan2.jpg" alt="">
      <p class="intro"></p>
    </div>
    <div class="button-container">
      <button type="button" class="collapsible">Gallery</button>
      <div class="content">
        <div class="gallery">
          <div><a href="./travel_pics/cuba/1.JPG" data-lightbox="balkan2" data-title=""><img
                src="./travel_pics/cuba/1.JPG" alt=""></a></div>
        </div>
      </div>
      <button type="button" class="collapsible">Travel story</button>
      <div class="content">
      </div>
    </div>

    <div class="arrow"><a href="#top"><i class="fas fa-arrow-up"></i></a></div>
  </main>

  <?php include '../php templates/footer.php' ?>

  <?php include '../php templates/bootstrap_script.php' ?>

</body>

</html>