<?php include "../includes/nav.php"; ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_app";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$films = $pdo->prepare("SELECT * FROM app");
$films->execute();
$bakje_met_films = $films->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Films</h1>
    <?php foreach ($bakje_met_films as $film): ?>
        <h2><?php echo htmlspecialchars($film["titel"]); ?></h2>
        <p>Jaartal: <?php echo htmlspecialchars($film["jaartal"]); ?></p>
        <p>Status: <?php echo htmlspecialchars($film["status"]); ?></p>
    <?php endforeach; ?>

    <?php include "../includes/footer.php"; ?>
</body>
</html>
