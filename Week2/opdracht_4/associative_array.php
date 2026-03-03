<?php

$games = [
["title" => "Minecraft",
"creator" => "Mojang",
"release" => "2009",
],
["title" => "Roblox",
"creator" => "Roblox Corporation",
"release" => "2006",
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
    <h1>Games</h1>
    <p><?= $games[0]["title"]; ?></p>
    <p><?= $games[0]["creator"]; ?></p>
    <p><?= $games[0]["release"]; ?></p>
    <p><?= $games[1]["title"]; ?></p>
    <p><?= $games[1]["creator"]; ?></p>
    <p><?= $games[1]["release"]; ?></p>
</body>
</html>