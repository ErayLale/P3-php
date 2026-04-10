<?php
    if (isset($_POST['naam']) && isset($_POST['cate']) && isset($_POST['jaar'])){
        $naam = $_POST['naam'];
        $cate = $_POST['cate'];
        $jaar = $_POST['jaar'];

        } if (strlen($naam) < 3) {
            echo "<a href='toevoegen.php'>Filmnaam moet minimaal 3 tekens bevatten.</a>";
        } elseif (strlen($naam) > 50) {
            echo "<a href='toevoegen.php'>Filmnaam mag maximaal 50 tekens bevatten.</a>";

        } elseif (strlen($cate) < 3) {
            echo "<a href='toevoegen.php'>Categorie moet minimaal 3 tekens bevatten.</a>";
        } elseif (strlen($cate) > 50) {
            echo "<a href='toevoegen.php'>Categorie mag maximaal 50 tekens bevatten.</a>";

        } elseif (!is_numeric($jaar)) {
            echo "<a href='toevoegen.php'>Jaartal moet een getal zijn.</a>";

        } else {
            echo "<h1>Item succesvol ontvangen </h1>";
            echo "<p>".htmlspecialchars($naam)." valt onder de categorie" .htmlspecialchars ($cate). "</p>";
            echo "<p>Jaartal:".htmlspecialchars($jaar)."</p>";
            echo '<a href="toevoegen.php">Terug naar toevoegen</a> <br>';
            echo '<a href="home.php">Terug naar home</a>';
        }
?>
