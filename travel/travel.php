<!DOCTYPE html>
<html lang="en">

<head>

<?php include '../php templates/head_links.php' ?>

  <meta name="description" content="The list of countries I visited" />
  <meta name="keywords" content="travel, map, world, marina, bertolini, marina bertolini, pictures" />

  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <!--collegamento a CSS-->

</head>

<body>

<?php include '../php templates/nav.php' ?>

  <main>
    <h1 class="destinations">Destinations</h1>
    <img src="../pictures/worldmap.png" alt="Visited countries">
    <div class="data">
      <div class="visited">
        <h1>32</h1>
        <br>
        <h2>COUNTRIES</h2>
      </div>
      <div class="visited">
        <h1>29</h1>
        <br>
        <h2>CAPITAL CITIES</h2>
      </div>
      <div class="visited">
        <h1>4</h1>
        <br>
        <h2>CONTINENTS</h2>
      </div>
    </div>
    <div class="cards">
      <a href="./austria.php" class="country"><img class="countrypic" src="/travel/pics-countries/austria.jpg" alt=""></a>
      <a href="./balkans.php" class="country"><img class="countrypic" src="/travel/pics-countries/balkans.jpg" alt=""></a>
      <a href="./cuba.php" class="country"><img class="countrypic" src="/travel/pics-countries/cuba.jpg" alt=""></a>
      <a href="./czech_republic.php" class="country"><img class="countrypic" src="/travel/pics-countries/czech republic.jpg" alt=""></a>
      <a href="./ethiopia.php" class="country"><img class="countrypic" src="/travel/pics-countries/ethiopia.jpg" alt=""></a>
      <a href="./france.php" class="country"><img class="countrypic" src="/travel/pics-countries/france.jpg" alt=""></a>
      <a href="./great_britain.php" class="country"><img class="countrypic" src="/travel/pics-countries/uk.jpg" alt=""></a>
      <a href="./greece.php" class="country"><img class="countrypic" src="/travel/pics-countries/greece.jpg" alt=""></a>
      <a href="./hungary.php" class="country"><img class="countrypic" src="/travel/pics-countries/hungary.jpg" alt=""></a>
      <a href="./india.php" class="country"><img class="countrypic" src="/travel/pics-countries/india.jpg" alt=""></a>
      <a href="./kenya.php" class="country"><img class="countrypic" src="/travel/pics-countries/kenya.jpg" alt=""></a>
      <a href="./malta.php" class="country"><img class="countrypic" src="/travel/pics-countries/malta.jpg" alt=""></a>
      <a href="./netherlands.php" class="country"><img class="countrypic" src="/travel/pics-countries/netherlands.jpg" alt=""></a>
      <a href="./panama.php" class="country"><img class="countrypic" src="/travel/pics-countries/panama.jpg" alt=""></a>
      <a href="./south_korea.php" class="country"><img class="countrypic" src="/travel/pics-countries/south korea.jpg" alt=""></a>
      <a href="./spain.php" class="country"><img class="countrypic" src="/travel/pics-countries/spain.jpg" alt=""></a>
      <a href="./sri_lanka.php" class="country"><img class="countrypic" src="/travel/pics-countries/sri lanka.jpg" alt=""></a>
      <a href="./turkey.php" class="country"><img class="countrypic" src="/travel/pics-countries/turkey.jpg" alt=""></a>
      <a href="./usa.php" class="country"><img class="countrypic" src="/travel/pics-countries/usa.jpg" alt=""></a>
    </div>
    <div class="arrow"><a href="#top"><i class="fas fa-arrow-up"></i></a></div>
  </main>

  <?php include '../php templates/footer.php' ?>

<?php include '../php templates/bootstrap_script.php' ?>

</body>

</html>