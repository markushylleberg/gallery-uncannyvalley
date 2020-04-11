<?php

$pageTitle = 'Gallery';
$isHomePage = 0;
require('partials/header.php');

?>


<div id="galleryPlatform" class="page-wrapper-gallery">
    <div class="row mt-3">
        <div class="gallery-loader text-center w-100" id="galleryLoader">
            <p>Loading gallery ...</p>
        </div>
        <div class="drawings-container col-md-4 col-sm-12 col-xs-12 d-flex justify-content-center align-self-center mt-5 mt-md-0">
            <div id="drawingsContainer" class="row"></div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="row justify-content-center align-self-center min-vh-100">
                <div class="sunlight-container">
                    <div></div>
                </div>
                <div id="interactivePlatform" class="interactive-platform align-self-center perspective">
                    <div class="element-div">
                        <img id="galleyElementImageOne" class="speciel" data-toggle="modal" data-target="#myModalOne">
                    </div>
                    <div class="element-div">
                        <img id="galleryElementImageTwo" class="speciel special-bottom" data-toggle="modal" data-target="#myModalTwo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div id="myModalOne" class="modal fade mt-5" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <video id="galleryVideo0" width="100%" controls loop autoplay muted>
                    </video>
                </div>
            </div>

        </div>
    </div>


    <div id="myModalTwo" class="modal fade mt-5" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <video id="galleryVideo1" width="100%" controls loop autoplay muted>
                    </video>
                </div>
            </div>

        </div>
    </div>

    <div id="drawingModal0" class="modal fade mt-5" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div id="drawingModalBody0" class="modal-body bg-dark drawings-modal">
                </div>
            </div>

        </div>
    </div>

    <div id="drawingModal1" class="modal fade mt-5" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div id="drawingModalBody1" class="modal-body bg-dark drawings-modal">
                </div>
            </div>

        </div>
    </div>

    <div id="drawingModal2" class="modal fade mt-5" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div id="drawingModalBody2" class="modal-body bg-dark drawings-modal">
                </div>
            </div>

        </div>
    </div>

<?php require('partials/footer.php')  ?>
