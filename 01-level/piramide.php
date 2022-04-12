<?php
$stapels = readline("Hoeveel stapels wil je hebben?");
for ($i = 0; $i < $stapels; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo ' * ';
    }
    echo PHP_EOL;
}
?>
