<!DOCTYPE html>
<html lang="en">

<head>

  <?php include '../php templates/head_links.php' ?>

  <meta name="description" />
  <meta name="keywords"
    content="marina, bertolini, marina bertolini, travels, austria, photos, pictures, travel pictures" />

  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <!--collegamento a CSS-->

  <script src="../js/collapse.js" defer></script>
  <!-- Collapsible gallery -->

</head>

<body>

  <?php include '../php templates/nav.php' ?>

  <main>
    <div class="banner"
      style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('../travel/banner/austria.jpg');">
      <h1 class="country_name">Austria</h1>
    </div>

    <div class="travels">
      <img class="travel" src="./travel_title/vienna.jpg" alt="">
      <p class="intro">
        Vienna was the <b>first European capital I decided to go with my friends to celebrate the New Year's Eve</b>.
        We had an amazing experience, especially because the city centre is really big and on the 31st of December there
        are many attractions and different
        areas. Food, beer and hot wine are everywhere to warm you up while you listen to electronic or latin music, you
        watch a show or just
        enjoy a walk. However, Vienna was also an interesting city to explore by visiting the <b>important palaces</b>,
        the <b>art
          collections</b> and admiring the <b>beautiful buildings</b> along the streets.
      </p>
    </div>
    <div class="button-container">
      <button type="button" class="collapsible">Gallery</button>
      <div class="content">
        <div class="gallery">
          <div><a href="./travel_pics/vienna_2011/1.JPG" data-lightbox="vienna"
              data-title="St. Stephen's Cathedral"><img src="./travel_pics/vienna_2011/1.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/2.JPG" data-lightbox="vienna" data-title="Hofburg"><img
                src="./travel_pics/vienna_2011/2.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/3.JPG" data-lightbox="vienna"
              data-title="Me and my friend Erica and the Hofburg"><img src="./travel_pics/vienna_2011/3.JPG" alt=""></a>
          </div>
          <div><a href="./travel_pics/vienna_2011/4.JPG" data-lightbox="vienna" data-title="Hofburg"><img
                src="./travel_pics/vienna_2011/4.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/5.JPG" data-lightbox="vienna"
              data-title="With my friends in the Volksgarten"><img src="./travel_pics/vienna_2011/5.JPG" alt=""></a>
          </div>
          <div><a href="./travel_pics/vienna_2011/6.JPG" data-lightbox="vienna" data-title="Volksgarten"><img
                src="./travel_pics/vienna_2011/6.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/7.JPG" data-lightbox="vienna"
              data-title="St. Stephen's Cathedral roof"><img src="./travel_pics/vienna_2011/7.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/8.JPG" data-lightbox="vienna" data-title="Schonbrunn Palace"><img
                src="./travel_pics/vienna_2011/8.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/9.JPG" data-lightbox="vienna" data-title="Schonbrunn Palace"><img
                src="./travel_pics/vienna_2011/9.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/10.JPG" data-lightbox="vienna" data-title="Schonbrunn Palace"><img
                src="./travel_pics/vienna_2011/10.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/11.JPG" data-lightbox="vienna"
              data-title="Schonbrunn Palace fountain"><img src="./travel_pics/vienna_2011/11.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/12.JPG" data-lightbox="vienna"
              data-title="Me and my friend Elisa with Schonbrunn Palace"><img src="./travel_pics/vienna_2011/12.JPG"
                alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/13.JPG" data-lightbox="vienna" data-title="Schonbrunn Palace"><img
                src="./travel_pics/vienna_2011/13.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/14.JPG" data-lightbox="vienna" data-title="Schonbrunn Palace"><img
                src="./travel_pics/vienna_2011/14.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/15.JPG" data-lightbox="vienna"
              data-title="Me with Schonbrunn Palace"><img src="./travel_pics/vienna_2011/15.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/16.JPG" data-lightbox="vienna"
              data-title="Drinking some hot wine at Schonbrunn Palace"><img src="./travel_pics/vienna_2011/16.JPG"
                alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/17.JPG" data-lightbox="vienna" data-title="Schubert memorial"><img
                src="./travel_pics/vienna_2011/17.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/18.JPG" data-lightbox="vienna" data-title="Wiener Staatsoper"><img
                src="./travel_pics/vienna_2011/18.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/19.JPG" data-lightbox="vienna" data-title="Good luck pigs"><img
                src="./travel_pics/vienna_2011/19.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/20.JPG" data-lightbox="vienna"
              data-title="Midnight at the Prater"><img src="./travel_pics/vienna_2011/20.JPG" alt=""></a></div>
          <div><a href="./travel_pics/vienna_2011/21.JPG" data-lightbox="vienna" data-title="Belvedere Museum"><img
                src="./travel_pics/vienna_2011/21.JPG" alt=""></a></div>
        </div>
      </div>
    </div>

    <div class="arrow"><a href="#top"><i class="fas fa-arrow-up"></i></a></div>
  </main>

  <?php include '../php templates/footer.php' ?>

  <?php include '../php templates/bootstrap_script.php' ?>

</body>

</html>