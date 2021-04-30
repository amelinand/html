<?php


// Creer un fonction qui prend en parametre un tableau
// Parcourir et afficher toutes les valeurs de ce tableau sans utliser de boucle foreach (sans var_dump les petits malins)
//Exo1

$tab4 = ['x-men', 'spiderman', 'great sayaman','iron man','superman', 'batman', 'wolverine', 'hulk'];



function myfunctionTest($array){

    $max = 0;
    foreach($array as $key => $value){
        $max = ($key);

    
    }
    $result = $max + 1;


    return($result);

}

myfunctionTest($tab4);

//Exo 2

function myfunction($array){

   for ($i = 0; $i < myfunctionTest($array);$i++){
       echo($array[$i]."<br>");

   }
}


myFunction($tab4);

//Fin de mon exo et correction de celui-ci.

// EXERCICE 5 :
// Déclarer une fonction qui prend en paramètre un tableau
// Calculer la longueur de ce tableau (le nb d'élememnts)
// retourner cette valeur

// DECLARER LE TABLEAU
$tab4 = [
    'x-men',
    'spiderman',
    'great sayaman',
    'iron man',
    'superman',
    'batman',
    'wolverine',
    'hulk'
];
// DECLARER LA FONCTION
function numberOfElements($data) {
    $keyMax = 0;                      // INSERER UNE VARIABLE à 0
    foreach ($data as $key=>$value) { // LA BOUCLE VA PARCOURIR TOUS LES INDEX
        $keyMax++;                    // A CHAQUE DATA PAROCURU $keyMax prend +1
    }
    return $keyMax;                   // RETURN PERMET DE REEXPLOITER LA VALEUR de $keyMax,
}                                     // soit le nb d'élements dans mon tableau
echo numberOfElements($tab4) . '<br>';


echo '<br>';
///////////////////////////////
// EXERCICE 6 :
// Déclarer une fonction qui prend en paramètre un tableau
// Parcourir et afficher toutes les valeurs de ce tableau sans utiliser de boucle foreach

// EXPLOITER LA FONCTION PRECEDEMENT DECLAREE :
function display($data) {
    for ( $i= 0; $i < numberOfElements($data); $i++) { // APPELLE LA FONCTION numberOfElements pr REEXPLOITER LE RETURN DE $keyMax
        echo $data[$i] . '<br>';                       // A CHAQUE ITERATION, AFFICHER LA VALEUR ASSIGNéE A L'INDEX $i DU TABLEAU $data
    }
}
display($tab4);