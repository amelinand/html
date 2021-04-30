<?php

$number = 2;
$number++;
$number = $number + 1;

/*
 * POUR $i allant de 1 à 10 par pas de 1
 *  Afficher 'Salut'
 * Fin
 */
for ($i = 1; $i <= 10; $i++) {
    echo('Salut');
    echo('<br>');
}

/*
 * TANT QUE $i est inférieur ou égale à 10
 *  Afficher 'Salut'
 * FIN TANT QUE
 */

$j = 1;

while ($j <= 10) {
    echo('Salut');
    echo('<br>');
    $j++;
}
