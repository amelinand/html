<?php

$array = ["toto", "tata", "hello", 4];

var_dump($array);
echo ("<br>");
echo ($array[2]);

foreach ($array as $value){
    var_dump($value);
}