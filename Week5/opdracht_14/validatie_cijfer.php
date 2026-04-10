<?php
$titel = "Test";
$titel = "";
$titel = "Hi"; 
$titel = "Workout maandag"; 
$titel = "Dit is een hele lange zin want het is de opdracht die ik moet maken voor 14";
// if test 
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Lengte</title>
</head>
<body>
    <h1>Lengte controle</h1>
    <p>titel:"<?php echo htmlspecialchars($titel); ?>"</p>
    <p>Aantal tekens: <?php echo strlen($titel); ?></p>
    <?php
    if (strlen($titel) === 0) {
        echo "<p>Titel is verplicht.</p>";
    } elseif (strlen($titel) < 3) {
        echo "<p>Titel moet minimaal 3 tekens bevatten.</p>";
    } elseif (strlen($titel) > 50) {
        echo "<p>Titel mag maximaal 50 tekens bevatten.</p>";
    } else {
        echo "<p>Titel is geldig.</p>";
    }
    ?>
</body>
</html>