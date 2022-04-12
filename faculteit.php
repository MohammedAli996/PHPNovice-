<?php
$getal3 = readline("Van welke getal wil je de facuiteit weten?");
$getal=$_POST['getal'];
$i=1;
$getal2=1;
while ($i != $getal)
{
$getal2=$getal2*($i+1);
$i;
}
echo $getal2;
?>