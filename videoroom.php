<?php

$pageTitle = 'Video room';
$isHomePage = 0;
require('partials/header.php');

?>

<div class="page-wrapper-videoroom">
    <div class="videoroom-video-container row justify-content-center align-self-center min-vh-100">
        <div class="align-self-center videoroom-inner">
            <!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ScMzIvxBSi4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></! -->
            <!-- <img width="100%" height="100%" src="https://data.uncannyvalley.dk/wp-content/uploads/2020/04/Skærmbillede-2020-04-07-kl.-12.58.05.png" alt="test image of video"> -->
            <video id="videoroomVideo" width="100%" controls autoplay>
            </video>
        </div>
    </div>
</div>

<?php require('partials/footer.php')  ?>
