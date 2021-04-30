<?php
echo ('Function');
echo("<br>");
echo("<br>");

function oddOrEven($number, $diviseur = 2) {
    echo ($number);
    echo("<br>");

    if ($number % $diviseur === 0) {
        echo("$number est divisible par $diviseur");
    } else {
        echo("$number n'est pas divisible par $diviseur");
    }
    echo("<br>");
    echo("<br>");
}

$myNumber = 2;
oddOrEven($myNumber, 4);

oddOrEven(10, 5);
oddOrEven(12, 7);
