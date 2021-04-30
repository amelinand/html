<?php

$number = 2;
$test = "3";

/* SI $number vaut 2
 *  ALORS
 *     Afficher "la valeur de number est égale à 2"
 *  SINON
 *     Afficher "La valeur de number n'est pas égale à 2"
 *     J'ajoute 2 à $number
 */

$number === 2; // $number est égale à 2
$number !== 2; // $number est différent à 2

$number < 2; // $number inférieur à 2
$number <= 2; // $number inférieur ou égale 2

$number > 2; // $number supérieur à 2
$number >= 2; // $number supérieur ou égale à 2

$boolean = $number !== 2;
var_dump($boolean);
// 0 = false
// 1 = true


// IF

if ($number === 2) {
    echo("La valeur de number est égale à 2");
} else {
    echo("La valeur de number n'est pas égale à 2");
}
echo("<br>");

if ($number < 2) {
    echo("La valeur de number est inférieur à 2");
} else if ($number === 2) {
    echo("La valeur de number est égale à 2");
} else {
    echo("La valeur de number est supérieur ou égale à 2");
}

if ("toto" !== "tata") {
    echo("toto");
}

echo("<br>");
echo("<br>");

// Switch

$gender = "M";

switch ($gender) {
    case "Mr":
        echo("You are a man");
        break;
    case "Mme":
        echo("You are a woman");
        break;
    default:
        echo("You are no-binary");
        break;
}

if ($gender === "Mr") {
    echo("You are a man");
} else if ($gender === 'Mme') {
    echo("You are a woman");
} else {
    echo("You are no-binary");
}
echo("<br>");
$number = 2;

$ternaire = $number >= 2 ? "égale à 2": "supérieur à 2";

echo($ternaire);