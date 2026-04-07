<?php
$aantal1 = "Aantal workouts:";   
$aantal2 = "aantal minuten gesport:";      
$aantal3 = "aantal glazen water:";        
$aantal4 = 5;
$aantal5 = 30;
$aantal6 = 8;
is_numeric($aantal4);
is_numeric($aantal5);
is_numeric($aantal6);
echo "$aantal1 " . $aantal4 . "<br>";
echo "$aantal2 " . $aantal5 . "<br>";
echo "$aantal3 " . $aantal6 . "<br>";
if (is_numeric($aantal4) && is_numeric($aantal5) && is_numeric($aantal6)) {
    echo "Correct ingevoerd.";
} else {
    echo "Voer een geldig getal in.";
}
?>