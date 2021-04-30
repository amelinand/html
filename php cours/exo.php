<?php
echo('Function');
echo('<br>');

function iCanCountToPotatoe($limit) {
    $i = 0;
    while($i <= $limit) {
        echo($i);
        echo('<br>');
        $i++;
    }
}

iCanCountToPotatoe(15);

function iCanCount($limit) {
    for ($i = 0; $i <= $limit; $i++) {
        echo($i);
        echo('<br>');
    }

}

iCanCount(12);
