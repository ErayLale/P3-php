<?php include "../includes/nav.php"; ?> 


<?php

$films = [
["title" => "Zootopia 2",
"creator" => "Walt Disney Animation Studios",
"status" => "Nog niet gekeken",
],
["title" => "Superman",
"creator" => "James Gunn",
"status" => "Afgekeken",
]

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Films</h1>
    <h2><?= $films[0]["title"]; ?></h2>
    <p><?= $films[0]["creator"]; ?></p>
    <p><?= $films[0]["status"]; ?></p>
    <h2><?= $films[1]["title"]; ?></h2>
    <p><?= $films[1]["creator"]; ?></p>
    <p><?= $films[1]["status"]; ?></p>
    <h3><?php include "../includes/footer.php"; ?></h3>
</body>
</html>
