<?php


function addoreven ($total){

$reste = $total % 2;


if ($reste ===0) {
    return("$total est pair");
} else {
    return  ("$total n'est pas pair");
}

}

$string = addoreven(17);

echo($string);
