<?php

// EXO 1 :
// Créer un fonction avec 3 parametres (INTEGER, FLOAT) 0/20
// Calculer la moyenne de 3 notes
// Afficher une msg pour indiquer si la moyenne est inférieur ou supérieur à 10

function myFunction($note1, $note2, $note3){
    echo ($total = $note1 + $note2 + $note3);
    echo ("<br>");
    
    
    if ($total / 3 < 10){
        echo("vous n'avez pas la moyenne");

    }else{

        echo("vous avez la moyenne");
        echo("<br>");
        echo("felicitation");
    }



}

myFunction(11,12,13);




function my_helloworld(){
    echo("Hello World");

}


my_helloworld();
