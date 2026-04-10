<?php
    if (isset($_POST['naam']) && isset($_POST['cate']) && isset($_POST['jaar'])){
        $naam = $_POST['naam'];
        $cate = $_POST['cate'];
        $jaar = $_POST['jaar'];
        if (!is_numeric($jaar)) {
            echo "<p>Jaartal moet een getal zijn</p>";
            echo '<a href="toevoegen.php">Ga terug en probeer opnieuw</a>';
        } else {
            echo "<h1>Item succesvol ontvangen </h1>";
            echo "<p>".htmlspecialchars($naam)."valt onder de categorie".htmlspecialchars($cate)."</p>";
            echo "<p>Jaartal:".htmlspecialchars($jaar)."</p>";
            echo '<a href="toevoegen.php">Terug naar toevoegen</a> <br>';
            echo '<a href="home.php">Terug naar home</a>';
        }
    }
?>
