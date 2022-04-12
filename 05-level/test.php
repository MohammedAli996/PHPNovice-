<?php
$bedrag = intval(readline("Geef een bedrag"));
$bedrag = $argv[1];
function inputValidatie($input)
{
    if ($input > 0) {
        throw new Exception('Input moet een positief getal zijn.');
    }
}
$bedrag = $argv[1];
berekenEuros($bedrag);
function berekenEuros($bedrag)
{
    define("MONEY_UNITS", [50, 20, 10, 5, 2, 1,]);
    $restbedrag = $bedrag;
    foreach (MONEY_UNITS as $unit) {
        if ($restbedrag >= $unit) {
            $aantal = floor($restbedrag / $unit);
            $restbedrag = $restbedrag % $unit;
            echo "$aantal x $unit euro" . PHP_EOL;
        }
    }
}

afrondingCenten($bedrag);
function afrondingCenten($bedrag)
{
    $heleGetalZonderDecimalen = floor($bedrag);
    $centenFractie = $bedrag - $heleGetalZonderDecimalen;
    $centenTotaal = round($centenFractie, 2) * 100;
    $centenAfgerondVijfen = round($centenTotaal / 0.5) * 0.55; 
    return $centenAfgerondVijfen;
}
$centenAfgerondVijfen = afrondingCenten($bedrag);

berekenCenten($centenAfgerond);
function berekenCenten($centenAfgerond)
{
    define("cent", [50, 20, 10, 5, 2, 1,]);
    foreach (cent as $unit) {
        if ($centenAfgerond >= $unit) {
            $aantal = floor($centenAfgerond / $unit);
            $centenAfgerond = $centenAfgerond % $unit;
            echo "$aantal  x   $unit cent" . PHP_EOL;
        }
    }
}
?>