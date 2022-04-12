<?php
$input = intval(readline("Geef een bedrag"));
$input = $argv[1];

if (!isset($argv[1])) {
    echo "Geen wisselgeld";
    exit();
};

$rest = round($input / 0.05) * 0.05;

if ($rest > 0) {
    define("BILJETTEN", [50, 20, 10, 5, 2, 1,]);
    foreach (BILJETTEN as $geldloop) {
        if ($rest >= $geldloop) {
            $amount = floor($rest / $geldloop);
            $rest = fmod($rest, $geldloop);
            echo "$amount x $geldloop euro" . PHP_EOL;
        };
    };
}; 

$rest = $rest * 100;

if ($rest > 0) {
    define("CENTEN", [50, 20, 10, 5, 2, 1]);
    foreach (CENTEN as $geldloop) {
        if ($rest >= $geldloop) {
            $amount = floor($rest / $geldloop);
            $rest = fmod($rest, $geldloop);
            $rest = round($rest);
            echo "$amount x $geldloop centen" . PHP_EOL;
        };
    };
};

if ($input == 0) {
    echo "Geen geld wisselgeld" . PHP_EOL;
};





?>