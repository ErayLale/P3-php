<?php
// 1) Maak connectie met PDO
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
 
// 2) Testdata (doe alsof dit uit een formulier komt)
$titel = "Test item";
$omschrijving = "Dit is een test.";
 
// 3) Prepared statement met placeholders
$sql = "INSERT INTO items (titel, omschrijving) VALUES (:titel, :omschrijving)";
$stmt = $pdo->prepare($sql);
 
// 4) Uitvoeren met execute (manier A: execute met array)
$stmt->execute([
    ":titel" => $titel,
    ":omschrijving" => $omschrijving
]);
 
echo "Insert gelukt (als je geen error ziet).";
?>