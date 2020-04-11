<?php

$pageTitle = 'Journal';
$isHomePage = 0;
require('partials/header.php');

?>

<!-- FIXED NAV  -->
    <div class="journal-fixed-nav fixed-top mx-3 text-right">
        <img onclick="journalsZoom()" class="img-zoom m-3" src="https://data.uncannyvalley.dk/wp-content/uploads/2020/04/close_up-8.png" alt="zoom"/>
    </div>


<!-- JOURNALS CONTAINER  -->
    <div class="page-wrapper-journal">
        <div id="journalContainer" class="container px-5 pt-5">
            <p id="journalLoader" class="loader text-center">Loading journals...</p>
        </div>
    </div>

<?php require('partials/footer.php')  ?>
