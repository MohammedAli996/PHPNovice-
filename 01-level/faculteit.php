<?php
$getal = readline("Van welk getal wil je de faculteit weten?" . PHP_EOL);
$faculteit = 1;
for ($i = 1; $i <= $getal - 1; $i++) {
    $faculteit *= ($i + 1); 
}
echo "Faculteit van $getal is $faculteit" . PHP_EOL;
?>