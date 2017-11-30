<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>pratimas 9.1</title>
</head>
<body>
<?php
    $mokiniai = [
        ['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7], 'anglu' =>[6, 7, 8], 'matematika' => [3, 5, 4]]], 
        ['vardas' => 'Ona', 'pazymiai' => ['lietuviu' => [10, 9, 10], 'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]]
        ];  
        
        
        function vidurkis($pazymiai){
            $sum = 0;
            foreach ($pazymiai as $pazimys) {
                $sum += $pazimys;
            }
            return $sum / count($pazymiai);
        }

        // function vidurkiai($mokinys){
        //     $vidurkis = 0;
        //     $trimestras = [];
        //     foreach ($mokinys['pazymiai'] as $dalykas =>$pazymiai) {
        //         $vidurkis = vidurkis($pazymiai);
        //         $trimestras[$dalykas] = $vidurkis;
        //     }
        //     $mokinys['trimestras'] = $trimestras;
        // }
    foreach ($mokiniai as $i => $n) {
        $mokiniai[$i]['trimestras'] = vidurkiai($n);
        $mokiniai[$i]['vidurkis'] = vidurkiai($mokiniai[$i]['trimestras']);
    }
var_dump($mokiniai);


// //rusiavimas
// for ($i=0; $i < count($mokiniai)-1; $i++) { 
//     $x = $mokiniai[$i];
//     for ($j=$i+1; $j < count($mokiniai); $j++) { 
//         if ($x['vidurkis'] > $mokiniai[$j]['vidurkis']) {
            
//         }
//     }
// }


?>

<table border="1">
    <tr><th>Vardas</th>
    <th>pazymiai</th>
    <th>Lietuviu vid.</th>
    <th>Anglu pazymiai</th>
    <th>Anglu vid.</th>
    <th>Matematikos pazymiai</th>
    <th>Matematikos vid.</th>
    <th>Bendras vidurkis</th></tr>

    <?php foreach ($mokiniai as $mokinys): ?>
    <tr>
        <td><?php echo $mokinys['vardas']; ?></td>
        
        <td><?php 
            foreach ($mokinys['pazymiai'] as $dalykas => $pazymiai): ?>
                <div>
                    <?php echo $dalykas . ':' ; ?>
                    <?php foreach ($pazymiai as $pazimys): ?>
                        <?php echo $pazimys . '' ?>
                        <?php endforeach; ?>
                </div>
            <?php endforeach; ?>  
        ?></td>
        <td><?php  ?></td>
        <td><?php  ?></td>
        <td><?php  ?></td>
        <td><?php  ?></td>
        <td><?php  ?></td>
    </tr>
    <?php endforeach; ?>
        
</table>
</body>
</html>