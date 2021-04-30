<?php









function myArray(){

    $array = [
        'Le Guide du voyageur galactique',
         'Le dérnier restaurant avant la fin du monde',
          'La Vie, l\'Univers et le Reste',
           'Salut, et encore merci pour le poisson',
            'Globalement inoffensive'
        ];

    foreach ($array as $value){
        echo($value . '<br>');

    }

}

myArray();