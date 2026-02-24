<?php
$appnaam = "Mefflix";
$trackertype = "Film/series tracker";
$tagline = "Houd bij welke films en series je hebt gekeken";

?>
<!-- // Mijn mini-app wordt een: Film/series tracker -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hoi, welkom bij <?= $appnaam ?></h1>
    <p> Mefflix is een <?= $trackertype ?> </p>
    <p> <?= $tagline ?> </p>
    <footer> 
    <p>Copyright <?php echo date("Y"); ?> <?= $appnaam ?></p>
    </footer>
</body>
</html>