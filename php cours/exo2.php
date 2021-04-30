<?php

for ($i = 10; $i >= 1; $i--) {

    echo $i;
    echo "<br>";

    if ($i === 1 ) {
        
        echo"BOOM ";
    
    }
    
}

echo("<br>");



$j = 10;

while($j >= 0) {
    if ($j !== 0) {
        echo($j ."<br>");
    } else {
        echo ("BOUM !!!");
    }
    $j--;
}