<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_games";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully"; 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$dbname = $conn->prepare("SELECT * FROM games");
$dbname->execute();
$bakje_met_games = $dbname->fetchAll(PDO::FETCH_ASSOC);
echo "<ul>";

foreach ($bakje_met_games as $game) {
    echo "<li>" . $game['title'] . "</li>";
}

echo "</ul>";
?>
