<!DOCTYPE html>
<html lang="en">

<head>

  <?php include '../php templates/head_links.php' ?>

  <meta name="description" />
  <meta name="keywords"
    content="marina, bertolini, marina bertolini, travels, france, photos, pictures, travel pictures" />

  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <!--collegamento a CSS-->

  <script src="../js/collapse.js" defer></script>
  <!-- Collapsible gallery -->

</head>

<body>

  <?php include '../php templates/nav.php' ?>

  <main>
    <div class="banner"
      style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('../travel/banner/france.jpg');">
      <h1 class="country_name">France</h1>
    </div>

    <div class="travels">
      <img class="travel" src="./travel_title/paris.jpg" alt="">
      <p class="intro">
        Me and my dad decided to go to Paris for few days together in August. I was just back from an amazing journey to
        Kenya and we chose
        Paris because it was relatively close and I had never been there. I must say that it is indeed a city everyone
        should visit at least once
        because of its importance in history, whose legacies are still visible today. However, <b>Paris is a city I
          didn't like</b>. I
        liked the sights, of course, the museums and the historical buildings but <b>the atmosphere, the soul, didn't
          capture me at all</b>. Maybe there
        will be other times for me in Paris but there is also so much else to discover!
      </p>
    </div>
    <div class="button-container">
      <button type="button" class="collapsible">Gallery</button>
      <div class="content">
        <div class="gallery">
          <div><a href="./travel_pics/paris_2009/1.JPG" data-lightbox="paris" data-title="The Seine"><img
                src="./travel_pics/paris_2009/1.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/2.JPG" data-lightbox="paris" data-title="Saint Chapel"><img
                src="./travel_pics/paris_2009/2.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/3.JPG" data-lightbox="paris" data-title="Notre Dame"><img
                src="./travel_pics/paris_2009/3.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/4.JPG" data-lightbox="paris" data-title="Notre Dame"><img
                src="./travel_pics/paris_2009/4.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/5.JPG" data-lightbox="paris" data-title="Louvre Museum"><img
                src="./travel_pics/paris_2009/5.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/6.JPG" data-lightbox="paris" data-title="Louvre Museum"><img
                src="./travel_pics/paris_2009/6.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/7.JPG" data-lightbox="paris"
              data-title="Psyche Revived by Cupid's Kiss by Antonio Canova at Louvre"><img
                src="./travel_pics/paris_2009/7.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/8.JPG" data-lightbox="paris" data-title="Opera de Paris"><img
                src="./travel_pics/paris_2009/8.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/9.JPG" data-lightbox="paris"
              data-title="Chagall painting on the Opera ceiling"><img src="./travel_pics/paris_2009/9.JPG" alt=""></a>
          </div>
          <div><a href="./travel_pics/paris_2009/10.JPG" data-lightbox="paris" data-title="Opera de Paris"><img
                src="./travel_pics/paris_2009/10.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/11.JPG" data-lightbox="paris" data-title="Tour Eiffel"><img
                src="./travel_pics/paris_2009/11.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/12.JPG" data-lightbox="paris" data-title="Napoleon's tomb"><img
                src="./travel_pics/paris_2009/12.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/13.JPG" data-lightbox="paris" data-title="Paris"><img
                src="./travel_pics/paris_2009/13.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/14.JPG" data-lightbox="paris" data-title="Sacre Coeur"><img
                src="./travel_pics/paris_2009/14.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/15.JPG" data-lightbox="paris" data-title="Gardens of Versailles"><img
                src="./travel_pics/paris_2009/15.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/16.JPG" data-lightbox="paris" data-title="Pantheon"><img
                src="./travel_pics/paris_2009/16.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/17.JPG" data-lightbox="paris" data-title="Pantheon"><img
                src="./travel_pics/paris_2009/17.JPG" alt=""></a></div>
          <div><a href="./travel_pics/paris_2009/18.JPG" data-lightbox="paris"
              data-title="Me and my dad in front of Notre Dame"><img src="./travel_pics/paris_2009/18.JPG" alt=""></a>
          </div>
        </div>
      </div>
    </div>

    <div class="arrow"><a href="#top"><i class="fas fa-arrow-up"></i></a></div>
  </main>

  <?php include '../php templates/footer.php' ?>

  <?php include '../php templates/bootstrap_script.php' ?>

</body>

</html>