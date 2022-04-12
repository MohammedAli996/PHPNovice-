<?php

function ball(int $i, int $j)
{
    if (($i % rand(1,2) == 1) && ($j % rand(1,2) == 1))
    {
        // a ball
        echo "\e[1;31m";  // change to Red
        echo " O ";       // print a ball
        return;
    }

    if (($i % rand(1,2) == 1) && ($j % rand(1,2) == 1))
    {
        // a ball
        echo "\e[1;34m";  // change to Blue
        echo " O ";       // print a ball
        return;
    }
    if (($i % rand(1,2) == 1) && ($j % rand(1,2) == 1))
    {
        // a ball
        echo "\e[1;33m";  // change to Blue
        echo " O ";       // print a ball
        return;
    }

    echo "\e[1;32m";  // change to green
    echo " * ";
}

function triangle(int $from, int $to)
{
    for ($i = 0; $i < 10; $i++)
    {
        if ($i >= $from && $i <= $to)
        {
            // left spacing
            for ($j = 10 - $i; $j > 0; $j--)
            {
                echo "   ";
            }

            // left side of the tree
            for ($j = 1; $j <= $i; $j++)
            {
                ball($i, $j);
            }

            // right side of the tree
            for ($j = 2; $j <= $i; $j++)
            {
                ball($i, $j);
            }

            echo PHP_EOL;
        }
    }
}

echo "\e[1;32m"; // set text to green

$wish = "             Fijne feestdagen en gelukkig 2022             ";

function textScroll(string $text)
{
    return substr($text, -1) . substr($text, 0, strlen($text) - 1);
}

echo "\e[?25l";
$count = 10;
while (true)
{
    $count--;
    if ($count == 0)
    {
        $count = 10;
        echo "\e[H";
        echo PHP_EOL;
        triangle(1, 5);
        triangle(3, 7);
        triangle(5, 9);
    }
    echo "\e[1;32m";
    $wish = textScroll($wish);
    echo "\e[18;1H";
    echo $wish;
    usleep(50000);
}

?>
