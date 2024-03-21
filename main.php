<?php

$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

if ($x > $y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$soma_impares = 0;

for ($i = $x + 1; $i < $y; $i++) {
    if ($i % 2 != 0) {
        $soma_impares += $i;
    }
}

echo $soma_impares . "\n";

?>