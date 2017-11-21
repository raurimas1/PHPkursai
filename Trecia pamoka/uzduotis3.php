<?php

$a = [ [1, 3, 4], [2, 5], [2 => 3, 5=> 8], [1, 1, 5 => 3] ];

$sum = [];
 
foreach ($a as $eilute) {
    foreach ($eilute as $stulpelis => $reiksme) {
        //echo $stulpelis . '-' . $reiksme . ';' . '<br>';
        $sum[$stulpelis] += $reiksme;
        

        
    }
}

echo max($sum);











// foreach ($sum as $sumos) {
//     // echo $sumos;
//     // echo '<br>';
    
// }
// $i = 0;
// if ($sumos[$i] > $sumos[$i+1]) {
//     $sumo[$i];
//     $i++;
// }    
// // for ($i=0; $i < count($sum); $i++) { 
// //     print_r($sum);
// //     // for ($j=0; $j < count($sum) - 1; $j++) { 
// //     //     //echo $sum[$j];
// //     //     if ($sum[$j] < $sum[$j+1]) {
// //     //         $laikinas = $sum[$j+1];
// //     //         $sum[$j+1] = $sum[$j];
// //     //         $sum[$j] = $laikinas;
// //     //         echo $laikinas;
            


?>