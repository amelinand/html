<?php



// Nombre premier : C'est un entier qui est divisible uniquement par 1 et lui même
// Créer un fonction qui prendre un entier en parametre
// Vérifier si cet entier est un nombre premier
// Retourner une chaine de charactere pour indiquer si ce nombre est premier ou non
// Afficher le résultat avec echo()




function entier($number){

    $count = 0;

    for ($i = 2; $i < $number; $i++){
        if($number % $i ===0){
            $count++;
        }

    }
    if($count === 0){
        return("$number est un nombre premier");

    }else{
        return("$number n'est pas un nombre premier");
    }
}

$string = entier(23);

echo($string);