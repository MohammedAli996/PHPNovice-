<?php
$input = intval(readline("Geef een bedrag"));
$input = $argv[1];

if (!isset($argv[1])) {
    echo "Geen wisselgeld";
    exit();
}

$rest = round($input / 0.05) * 0.05;

if ($rest > 0) {
    define("BILJETTEN", [100, 50, 20, 10, 5, 2, 1,]);
    foreach (BILJETTEN as $geldloop) {
        if ($rest >= $geldloop) {
            $amount = floor($rest / $geldloop);
            $rest = fmod($rest, $geldloop);
            echo "$geldloop x $amount euro";
        }
    }
}

if ($input == 0) {
    echo "Geen Geld wisselgeld" . PHP_EOL;
}
        
?>
