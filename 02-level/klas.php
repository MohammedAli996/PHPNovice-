<?php 
$input = readline("Wie zit er in jou klas?" . PHP_EOL);


$klasgenoten = explode(" ", $input);


echo "De studenten in jouw klas zijn: " . PHP_EOL;

foreach ($klasgenoten as $value) {
    print $value . "\n";
}
?>