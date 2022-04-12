<?php

$getal = readline('Van welk getal wil je de faculteit berekenen? ');
$input = $getal;
$faculteit = 1;

while ($getal >= 1) {  
    $faculteit = $faculteit * $getal;
    $getal--;
}
echo "Faculteit van $input is $faculteit";
?>