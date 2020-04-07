<?php

$pageTitle = 'Galley Uncanny Valley';
$isHomePage = 1;
require('partials/header.php');

?>

<div class="page-wrapper pt-5">

    <div class="container max-vh-100 landing-container">

    <!-- LOGO -->
        <div class="w-50 pt-5">
            <img class="img-fluid" src="https://data.uncannyvalley.dk/wp-content/uploads/2020/04/Loge_1.png" alt="Uncanny Valley Logo" />
        </div>



    <!-- NAV  -->
        <div class="row d-flex d-flex justify-content-between py-5">
            <div class="nav-entry row col-md-4 col-12 col-xs-12 my-5 justify-content-center align-self-center">
                <a class="align-self-center" href="videoroom.php">video room</a>
            </div>

            <div class="nav-entry row col-md-4 col-12 col-xs-12 my-5 justify-content-center align-self-center">
                <a class="align-self-center" href="gallery.php">gallery</a>
            </div>


            <div class="nav-entry row col-md-4 col-12 col-xs-12 my-5 justify-content-center align-self-center">
                <a class="align-self-center" href="journal.php">journal</a>
            </div>

        </div>


    <!-- CONTACT  -->
        <div class="force-to-bottom pt-3 text-center">
            <p class="text-white">Contact: gallery.uncannyvalley@gmail.com</p>
        </div>
    </div>

</div>

<?php require('partials/footer.php')  ?>