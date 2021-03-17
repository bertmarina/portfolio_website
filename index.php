<!DOCTYPE html>
<html lang="en">

<head>

  <?php include './php templates/head_links.php' ?>

  <meta name="description" content="the homepage of my personal website" />
  <meta name="keywords" content="homepage, index, presentation, marina, bertolini, marina bertolini, travels" />

  <link rel="stylesheet" type="text/css" href="css/style_index.css" />
  <!--collegamento a CSS-->

  <script src="/js/app.js" defer></script>
  <!-- Animation center page -->
</head>

<body>

  <?php include './php templates/nav.php' ?>

  <main>
    <div class='content'>
      <h2>Hey, I am Marina</h2>
      <br>
      <h2>I like <span id="interests"></span></h2>
    </div>
  </main>

  <?php include './php templates/footer.php' ?>

  <?php include './php templates/bootstrap_script.php' ?>
</body>

</html>