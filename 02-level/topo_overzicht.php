<?php 


$input = readline("Hoeveel landen wil je toevoegen aan de test?" . PHP_EOL);
if (is_numeric($input) == false) {
    exit("$input is geen getal");
};
 
$topotest = [];
 
for ($x = 1; $x <= $input; $x++) {
    $inputland = readline("Welk land wil je toevoegen" . PHP_EOL);
    $inputstad = readline("Welk wat is de hoofdstad van $inputland?" . PHP_EOL);
    $topotest [$inputland] = $inputstad;
}; 

echo "De volgende landen zitten in het database: " . PHP_EOL;
foreach ($topotest as $key => $value) {
    echo "Land: $key, Hoofdstad: $value" . PHP_EOL;
};

?>