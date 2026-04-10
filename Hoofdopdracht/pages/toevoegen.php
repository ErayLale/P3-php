<?php include "../includes/nav.php"; ?>

<!DOCTYPE html>    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoi</title>
</head>
<body>
    <h1> Films Toevoegen </h1>
    <form method="POST" action="verwerk.php">
        <input type="text" name="naam" placeholder="Film" required>
        <input type="text" name="cate" placeholder="Categorie" required>
        <input type="text" name="jaar" placeholder="Jaartal" required>
        <button type="submit">Verstuur</button>
    </form>
</body>
</html> 
