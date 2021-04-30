<?php




$tab0 = ['Goodbye','Dennis'];
$tab1 = ['U','DUN','GOOFED'];
$tab2 = ['name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed'];
$tab3 = ['bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry'];
$tab4 = ['x-men', 'spiderman', 'great sayaman','iron man','superman', 'batman', 'wolverine', 'hulk'];



function onlyTheBeast($data){


    $max = 0;

    foreach($data as $key => $value){
        
        if(strlen($value)> $max){
            $max = (strlen($value));
            $maxstring = ($value);

        }


    }
    echo("$max. $maxstring <br>");

}



onlyTheBeast($tab0);
onlyTheBeast($tab1);
onlyTheBeast($tab2);
onlyTheBeast($tab3);
onlyTheBeast($tab4);