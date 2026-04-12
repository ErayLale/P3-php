<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_app";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed:".$e->getMessage();
}

if (isset($_POST["titel"])) {
    $titel = $_POST["titel"];
    $pdo->prepare("INSERT INTO items (titel) VALUES (:titel)")->execute([
        ":titel" => $titel
    ]);

    // header("Location: refresh_test.php");
    // exit();
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Refresh Test</title>
</head>
<body>
    <h1>Item toevoegen</h1>
    <form method="POST" action="refresh_test.php">
        <input type="text" name="titel" placeholder="Titel">
        <button type="submit">Verstuur</button>
    </form>
</body>
</html>
