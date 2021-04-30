<?php

echo("Hello World");

// Je suis un commentaire

$myFirstVariable = "Hello Moi"; // Type String (chaine de caractère)
echo($myFirstVariable);


$number = 50; // Type : Interger nombre  Entier (nombre)
$float = 50.76; // Type : Float


$boolean = true;
$boolean = false;

$myFirstVariable = "new Value";


//$num1 = 2;
//$num2 = 4;

//$somme = $num1 + $num2;

//echo($somme); (la somme des deux opération)


//$addition = $num1 + $num2;
//$substraction = $num1 - $num2;
//$division = $num1 / $num2
//$multiplication = $num1 * $num2
//$num1 += $num2 ($1 + $2)
//$num1 -= $num2 ($1 - $2)


$myFirstVariabletwoo = "jai";
$number = 60;
$finish = "ans";

$sentence = $myFirstVariabletwoo . $number . $finish; //(de la complession)



$number = 2;


echo($sentence);
if ($num2 === 2){
    echo("la valeur de number est égale à 2");

}else {
    echo("la valeur de number n'est pas égale à 2");
}


$gender ="Mme";

switch ($gender){
    case "mr":
        echo("your are a man");
        break;
    
    case "Mme":
        echo("You are a woman");
        break;
}