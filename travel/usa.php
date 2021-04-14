<!DOCTYPE html>
<html lang="en">

<head>

  <?php include '../php templates/head_links.php' ?>

  <meta name="description" />
  <meta name="keywords"
    content="marina, bertolini, marina bertolini, travels, usa, united states, america, photos, pictures, travel pictures" />

  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <!--collegamento a CSS-->

  <script src="../js/collapse.js" defer></script>
  <!-- Collapsible gallery -->

</head>

<body>

  <?php include '../php templates/nav.php' ?>

  <main>
    <div class="banner"
      style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('../travel/banner/usa.jpg');">
      <h1 class="country_name">USA</h1>
    </div>

    <div class="travels">
      <img class="travel" src="./travel_title/exchange.jpg" alt="">
      <p class="intro">
      I cannot really say this was a travel. <b>It was more a life experience</b>. I left for the US in August 2015 with the idea of spending the
        Fall Semester studying abroad, at the <b>Loyola University of New Orleans</b>. I hoped I could have some time for travelling
        and see something more of this big country and I still cannot believe I did everything I did! <br> With other students I went to
        <b>Pensacola</b>, Florida, and did an incredible roadtrip from <b>New Orleans to Chicago</b>, stopping by
        <b>Memphis</b> and <b>Nashville</b>. I spent Thanksgiving with my roommate's family in <b>Dallas</b> and travelled to
        <b>Washington DC, Philadelphia, Boston and New York</b> during Christmas Holidays. I even found an internship and got to stay
        few more months in NOLA so I participated at the famous <b>Mardi Gras</b>. I went to <b>Austin</b>, driving with a
        hurricane alarm, to see the <b>Formula 1</b> race and sipped Coke at the <b>World of Coca Cola in Atlanta</b>. What
        else could I ask for?
      </p>
    </div>
    <div class="button-container">
      <button type="button" class="collapsible">Gallery</button>
      <div class="content">
        <div class="gallery">
          <div><a href="./travel_pics/usa_2015/1.JPG" data-lightbox="exchange" data-title=""><img
                src="./travel_pics/usa_2015/1.JPG" alt=""></a></div>
  
        </div>
      </div>
    </div>

    <div class="arrow"><a href="#top"><i class="fas fa-arrow-up"></i></a></div>
  </main>

  <?php include '../php templates/footer.php' ?>

  <?php include '../php templates/bootstrap_script.php' ?>

</body>

</html>