<!DOCTYPE html>
<html lang="en">

<head>

  <?php include '../php templates/head_links.php' ?>

  <meta name="description" />
  <meta name="keywords"
    content="marina, bertolini, marina bertolini, travels, switzerland, photos, pictures, travel pictures" />

  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <!--collegamento a CSS-->

  <script src="../js/collapse.js" defer></script>
  <!-- Collapsible gallery -->

</head>

<body>

  <?php include '../php templates/nav.php' ?>

  <main>
    <div class="banner"
      style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('../travel/banner/switzerland.jpg');">
      <h1 class="country_name">Switzerland</h1>
    </div>

    <div class="travels">
      <img class="travel" src="./travel_title/bellinzona.jpg" alt="">
      <p class="intro">
        When I organized this day trip, I could not imagine that few years later I would have actually moved to
        Switzerland (although not to Bellinzona). As
        for many cities in this small country, Bellinzona is quite <b>small</b> although it made to become a <b>Unesco
          site</b> in 2000. It is mainly famous for its
        <b>three castles: Montebello, Castelgrande and Sasso Corbaro</b>. If you pass by or you are visiting some nearby
        area, a stop here is worth it!
      </p>
    </div>
    <div class="button-container">
      <button type="button" class="collapsible">Gallery</button>
      <div class="content">
        <div class="gallery">
          <div><a href="./travel_pics/bellinzona_2014/1.JPG" data-lightbox="bellinzona"
              data-title="View of Bellinzona"><img src="./travel_pics/bellinzona_2014/1.JPG" alt=""></a></div>
          <div><a href="./travel_pics/bellinzona_2014/2.JPG" data-lightbox="bellinzona"
              data-title="With my mom in Bellinzona"><img src="./travel_pics/bellinzona_2014/2.JPG" alt=""></a></div>
          <div><a href="./travel_pics/bellinzona_2014/3.JPG" data-lightbox="bellinzona" data-title="Castelgrande"><img
                src="./travel_pics/bellinzona_2014/3.JPG" alt=""></a></div>
          <div><a href="./travel_pics/bellinzona_2014/4.JPG" data-lightbox="bellinzona" data-title="Sasso Corbaro"><img
                src="./travel_pics/bellinzona_2014/4.JPG" alt=""></a></div>
          <div><a href="./travel_pics/bellinzona_2014/5.JPG" data-lightbox="bellinzona" data-title="Sasso Corbaro"><img
                src="./travel_pics/bellinzona_2014/5.JPG" alt=""></a></div>
          <div><a href="./travel_pics/bellinzona_2014/6.JPG" data-lightbox="bellinzona"
              data-title="View of Bellinzona"><img src="./travel_pics/bellinzona_2014/6.JPG" alt=""></a></div>
          <div><a href="./travel_pics/bellinzona_2014/7.JPG" data-lightbox="bellinzona" data-title="Sasso Corbaro"><img
                src="./travel_pics/bellinzona_2014/7.JPG" alt=""></a></div>
          <div><a href="./travel_pics/bellinzona_2014/8.JPG" data-lightbox="bellinzona"
              data-title="View of Bellinzona"><img src="./travel_pics/bellinzona_2014/8.JPG" alt=""></a></div>
          <div><a href="./travel_pics/bellinzona_2014/9.JPG" data-lightbox="bellinzona" data-title="Montebello"><img
                src="./travel_pics/bellinzona_2014/9.JPG" alt=""></a></div>
          <div><a href="./travel_pics/bellinzona_2014/10.JPG" data-lightbox="bellinzona"
              data-title="View of Bellinzona"><img src="./travel_pics/bellinzona_2014/10.JPG" alt=""></a></div>
          <div><a href="./travel_pics/bellinzona_2014/11.JPG" data-lightbox="bellinzona" data-title="Castelgrande"><img
                src="./travel_pics/bellinzona_2014/11.JPG" alt=""></a></div>
          <div><a href="./travel_pics/bellinzona_2014/12.JPG" data-lightbox="bellinzona" data-title="Sasso Corbaro"><img
                src="./travel_pics/bellinzona_2014/12.JPG" alt=""></a></div>
          <div><a href="./travel_pics/bellinzona_2014/13.JPG" data-lightbox="bellinzona"
              data-title="View of Bellinzona"><img src="./travel_pics/bellinzona_2014/13.JPG" alt=""></a></div>
          <div><a href="./travel_pics/bellinzona_2014/14.JPG" data-lightbox="bellinzona"
              data-title="Me in Montebello"><img src="./travel_pics/bellinzona_2014/14.JPG" alt=""></a></div>
        </div>
      </div>
    </div>

    <div class="arrow"><a href="#top"><i class="fas fa-arrow-up"></i></a></div>
  </main>

  <?php include '../php templates/footer.php' ?>

  <?php include '../php templates/bootstrap_script.php' ?>

</body>

</html>