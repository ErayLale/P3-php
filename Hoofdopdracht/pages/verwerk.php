<?php
if (isset($_POST['naam']) && isset($_POST['cate']) && isset($_POST['jaar'])) {
    $titel = $_POST['naam'];
    $status = $_POST['cate'];
    $jaartal = $_POST['jaar'];

    if (strlen($titel) < 3) {
        echo "<p>Filmnaam moet minimaal 3 tekens bevatten.</p>";
        echo "<a href='toevoegen.php'>Ga terug</a>";
    } else if (strlen($titel) > 50) {
        echo "<p>Filmnaam mag maximaal 50 tekens bevatten.</p>";
        echo "<a href='toevoegen.php'>Ga terug</a>";
    } else if (strlen($status) < 3) {
        echo "<p>Status moet minimaal 3 tekens bevatten.</p>";
        echo "<a href='toevoegen.php'>Ga terug</a>";
    } else if (strlen($status) > 50) {
        echo "<p>Status mag maximaal 50 tekens bevatten.</p>";
        echo "<a href='toevoegen.php'>Ga terug</a>";
    } else if (!is_numeric($jaartal)) {
        echo "<p>Jaartal moet een getal zijn.</p>";
        echo "<a href='toevoegen.php'>Ga terug</a>";
    } else {
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

        $sql = "INSERT INTO app (titel, jaartal, status) VALUES (:titel, :jaartal, :status)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":titel" => $titel,
            ":jaartal" => $jaartal,
            ":status" => $status
        ]);

        header("Location: home.php");
        exit();
    }
}
?>
