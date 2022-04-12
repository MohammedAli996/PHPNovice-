<?php
$input = readline("Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL);
if (is_numeric($input) == false) {
    exit("$input is geen getal");
}

$dreams = [];

for ($x = 1; $x <= $input; $x++) {
    $name = readline('Wat is je naam?' . PHP_EOL);
    $dreams[$name] = [];
    $dream = readline('Wat is je droom?' . PHP_EOL);
    $dreams[$name][] = $dream;
}

foreach ($dreams as $name => $dreams) {
    echo "$name droomt van ";
    foreach ($dreams as $dream) {
        echo $dream . PHP_EOL;
    }
}

?>