<?php


$tab4 = ['x-men', 'spiderman', 'great sayaman','iron man','superman', 'batman', 'wolverine', 'hulk'];





function myfunctionTest($array){

    $max = 0;
    foreach($array as $key => $value){
        $max = ($key);

    
    }
    $result = $max + 1;


    echo("$result => lignes de valeurs");

}

myfunctionTest($tab4);