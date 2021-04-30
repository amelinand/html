<?php

$user = [
    'firstName' => 'Vincent',
     'age' => 29,
      'lastName' => 'Schlosser'
    ];



    foreach($user as $key => $value){
        if ($key === 'age'){
        echo($value. "ans");
        }
    }


