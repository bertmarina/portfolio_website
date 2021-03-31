<!DOCTYPE html>
<html lang="en">

<head>

<?php include '../php templates/head_links.php' ?>

  <meta name="description" content="the homepage of my personal website" />
  <meta name="keywords" content="homepage, index, presentation, marina, bertolini, marina bertolini, travels" />

  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <!--collegamento a CSS-->

  <script src="../js/app.js" defer></script>
  <!-- Collapsible gallery -->

</head>

<body>

<?php include '../php templates/nav.php' ?>

<main>
    <div class="banner">
      <h1 class="country_name">Spain</h1>
    </div>

    <div class="travels">
      <img class="travel" src="../travel/erasmus.jpg" alt="">
      <p class="intro">Since when I was in high school I dreamt about going abroad for a while. When I started
        university, I applied for the <b>Erasmus Program</b> and I made it! My destination for one semester would have
        been the beautiful city of <b>Valencia</b>. I immediately fell in love with it because of the perfect weather,
        its dimension and the wonderful people I met there. Spain was also where my obsession passion for <b>Korea</b>
        started and where I met one of my best friends. Being in Valencia was also the occasion to visit other
        interesting towns and cities such as Barcelona, Madrid, Sagunto, and Xativa.
        The time I spent there seemed so short when I left so I was super excited when I made it back after few months
        to participate in <b>Las Fallas</b>. This is a celebration that lasts over a week and culminates on the 19th of
        March every year. The city fills with huge sculptures that are eventually set on fire.</p>
    </div>

    <div class="button-container">
      <button type="button" class="collapsible">Gallery</button>
      <div class="content">
        <div class="gallery">
          <div><a href="../travel/travel_pics/erasmus_2013/1.JPG" data-lightbox="erasmus"
              data-title="Bell tower 'Miquelete' of the Valencia cathedral"><img
                src="../travel/travel_pics/erasmus_2013/1.JPG" alt=""></a></div>
</div>
</div>
</div>

<div class="break"></div>

<div class="travels">
      <img class="travel" src="../travel/andalusia.jpg" alt="">
      <p class="intro">Spain has a special place in my heart after the Erasmus I did in Valencia back in 2013. However,
        it took a while for me to go back to it. Andalusia was in the top destinations I wanted to visit and it was even
        better than expected. The best time is going in May when the temperatures are not too hot (more or less), and
        when you can enjoy <b>Feria de Abril</b> in Seville and the opening of the <b>Cordoba patios</b>. My one-week
        travel started in Seville, followed by Granada (got the last ticket left for Alhambra!), Cordoba, and Malaga.
        The city I like the most was Granada, with its charm and the breathtaking view of Alhambra from Sacromonte. In
        addition, I loved to explore those cities with walking tour guides. They are perfect to appreciate without
        stress the details of these cities. I hope to go back soon to this wonderful region as it really amazed me.</p>
    </div>
    <div class="button-container">
      <button type="button" class="collapsible">Gallery</button>
      <div class="content">
        <div class="gallery">
          <div><a href="../travel/travel_pics/erasmus_2013/1.JPG" data-lightbox="erasmus"
              data-title="Bell tower 'Miquelete' of the Valencia cathedral"><img
                src="../travel/travel_pics/erasmus_2013/1.JPG" alt=""></a></div>
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