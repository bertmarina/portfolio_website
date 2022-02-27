<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../php templates/head_links.php' ?>

    <meta name="description" />
    <meta name="keywords"
        content="marina, bertolini, marina bertolini, travels, portugal, photos, pictures, travel pictures" />

    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <!--collegamento a CSS-->

    <script src="../js/collapse.js" defer></script>
    <!-- Collapsible gallery -->

</head>

<body>

    <?php include '../php templates/nav.php' ?>

    <main>
        <div class="banner"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('../travel/banner/portugal.jpg');">
            <h1 class="country_name">Portugal</h1>
        </div>

        <div class="travels">
            <img class="travel" src="./travel_title/portugalroadtrip.jpg" alt="">
            <p class="intro">
                Portugal has been in my mind for quite a long time but I never managed to go. Then, Covid came, plans were made and then fell apart.
                To celebrate 2022, the plan was to go to Jordan but, few weeks before the departure, all the borders were closed. And that is how 
                Portugal happened! With the great company of Ilaria, we organized everything in two days and, despite all the adversities we faced,
                we managed to go, have a wonderful road trip and come back. Even though it was not so far from home and last minute, it was one of the 
                best travel I have ever made!
            </p>
        </div>
        <div class="button-container">
            <button type="button" class="collapsible">Gallery</button>
            <div class="content">
                <div class="gallery">


                    <div><a href="./travel_pics/portugal_2021/1.JPG" data-lightbox="portugal" data-title=""><img
                                src="./travel_pics/portugal_2021/1.JPG" alt=""></a></div>

                </div>
            </div>
        </div>

        <div class="arrow"><a href="#top"><i class="fas fa-arrow-up"></i></a></div>
    </main>

    <?php include '../php templates/footer.php' ?>

    <?php include '../php templates/bootstrap_script.php' ?>

</body>

</html>