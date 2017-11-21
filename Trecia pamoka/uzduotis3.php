<?php

$a = [ [1, 3, 4], [2, 5], [2 => 3, 5=> 8], [1, 1, 5 => 3] ];

$sum = [];
 
foreach ($a as $eilute) {
    foreach ($eilute as $stulpelis => $reiksme) {
        //echo $stulpelis . '-' . $reiksme . ';' . '<br>';
        $sum[$stulpelis] += $reiksme;   
    }
}
//echo max($sum);

$x = 0;
foreach ($sum as $sumos) {
    if ($sumos > $b) {
        $x = $sumos;
    }
}
echo $sumos;

?>