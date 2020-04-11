<?php

$pageTitle = 'Galley Uncanny Valley';
$isHomePage = 1;
require('partials/header.php');

?>

<div class="page-wrapper pt-5 px-0">
    <div class="container max-vh-100 landing-container">

    <div class="row pt-5">
        <!-- LOGO -->
        <div class="w-50 col-6 no-padding justify-content-center align-self-center">
            <img class="img-fluid logo-img" src="https://data.uncannyvalley.dk/wp-content/uploads/2020/04/Loge_1-1-e1586597347445.png" alt="Uncanny Valley Logo" />
        </div>

        <!-- CATALOG BUTTON  -->
        <div class="catalog-container text-right col-6 no-padding justify-content-center align-bottom">
                <button data-toggle="modal" data-target="#catalogModal" class="catalong-btn">press</button>
        </div>
    </div>

    <!-- NAV  -->
        <div class="row d-flex justify-content-between py-5">
            <div class="nav-entry row col-md-4 col-12 col-xs-12 my-5 justify-content-center align-self-center">
                <a class="align-self-center" href="videoroom.php">video room</a>
            </div>
            <div class="nav-entry row col-md-4 col-12 col-xs-12 my-5 justify-content-center align-self-center">
                <a class="align-self-center" href="gallery.php">gallery</a>
            </div>
            <div class="nav-entry row col-md-4 col-12 col-xs-12 my-5 justify-content-center align-self-center">
                <a class="align-self-center" href="journal.php">journal</a>
            </div>

    <!-- CONTACT  -->
            <div class="col-12 pt-5 text-center">
                <p class="text-white justify-content-center d-flex align-center">Contact: gallery.uncannyvalley@gmail.com &nbsp;<a href="https://www.instagram.com/signegrevepersson/?hl=da" target='_blank'><span class="instagram-icon"></span></a></p>
            </div>
        </div>
    </div>
</div>

<div id="catalogModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div id="catalogBody" class="catalog-modal modal-body bg-dark">

                </div>
            </div>

        </div>
    </div>

<?php require('partials/footer.php')  ?>