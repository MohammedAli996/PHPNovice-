<?php
$arr = array( 'Aardbeien Smaken Niet Zoet In De Winter' => 1,
              'In De Moestuin Is Het Altijd Lente' => 50, 
              'Composteren Kun Je Leren' => 2,
              'Wortelen Trek Je Niet Zomaar' => 1000,
            );
      
$keys = array_keys($arr);
$size = sizeof($arr);
      
echo "Het album overzicht: " . PHP_EOL; 
for ($x = 0; $x < $size; $x++) {
    echo "Album: " . $keys[$x] . " kost € " . $arr[$keys[$x]] . "\n";
}

echo "Totaal prijs: €" . (array_sum($arr)) . PHP_EOL;
echo "Gemiddelde prijs: €" . (array_sum($arr)) / count($arr) . PHP_EOL;

?> 