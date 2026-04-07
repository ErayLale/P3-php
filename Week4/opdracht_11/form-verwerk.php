<!DOCTYPE html>
<html lang="nl">
<body>
    <form method="POST" action="form-verwerk.php">
        <input type="text" name="naam" placeholder="Jouw naam" required>
        <input type="number" name="aantal" placeholder="Aantal">
        <button type="submit">Verstuur</button>
    </form>

    <?php
    if (isset($_POST['naam']) && isset($_POST['aantal'])){
        $naam=$_POST['naam'];
        $aantal=$_POST['aantal'];
        echo "$naam heeft $aantal";
    }
    ?>
</body>
</html>