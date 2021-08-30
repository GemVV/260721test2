<?php

$minCol = $_GEAT['minCol'] ?? 1;
$maxCol = $_GEAT['maxCol'] ?? 10;

for ($i=1; $i <= 10; $i++ ) {
    for ($k=1; $k <= 10; $k++)
    {
        echo "$i x $k = " . $i * $k ;
        echo "</br>";
    }

    echo '<br>';
}

