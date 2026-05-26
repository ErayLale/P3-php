<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_app";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully"; 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$films = $conn->prepare("SELECT * FROM app");
$films->execute();
$bakje_met_films = $films->fetchAll(PDO::FETCH_ASSOC);

foreach($bakje_met_films as $film) {
    echo $film["titel"] . "<br>";
    echo $film["jaartal"] . "<br>";
    echo $film["status"] . "<br><br>";
}
?>
