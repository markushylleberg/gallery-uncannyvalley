<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/app.css?v=1.9">
</head>
<body>

<?php echo ($isHomePage == 0 ? '<a href="index.php" class="nav-return-to-index"><img class="w-50 m-3" src="https://data.uncannyvalley.dk/wp-content/uploads/2020/04/Arrow-8-1.png"></a>' : '') ?>