 <?php
    if (isset($_POST['naam']) && isset($_POST['cate'])){
        $naam=$_POST['naam'];
        $cate=$_POST['cate'];
        echo "<h1> Item succesvol ontvangen </h1>";
        echo "<p>" . htmlspecialchars($naam) . " valt onder de categorie " . htmlspecialchars($cate) . "</p>";
        echo '<a href="toevoegen.php">Terug naar toevoegen</a> <br>';
        echo '<a href="home.php">Terug naar home</a>';
        }

    ?>
