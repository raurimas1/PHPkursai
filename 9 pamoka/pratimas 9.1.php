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
        
        foreach ($mokiniai as $mokinys) {
            foreach ($mokinys['pazymiai'] as $pazymys) {      
            }
        }
        
        function vidurkis($pazymys){
            $suma = 0;
            foreach ($pazymys as $ivertinimas) {
                $suma += $ivertinimas;
            }
                return round($suma / count($pazymys));   
        }
?>

<table border="1">
    <tr><th>Vardas</th>
    <th>Lietuviu pazymiai</th>
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
            foreach ($mokinys['pazymiai']['lietuviu'] as $pazymiai): ?>
                <?php echo $pazymiai;?>
            <?php endforeach; ?>  </td>
        <td><?php echo round(vidurkis($mokinys['pazymiai']['lietuviu'])) ?></td>
        <td><?php foreach ($mokinys['pazymiai']['anglu'] as $pazymiai): ?>
                <?php echo $pazymiai;?>
            <?php endforeach; ?>   </td>
        <td><?php  echo round(vidurkis($mokinys['pazymiai']['anglu']))?></td>
        <td><?php  foreach ($mokinys['pazymiai']['matematika'] as $pazymiai): ?>
                <?php echo $pazymiai;?>
            <?php endforeach; ?></td>
        <td><?php  echo round(vidurkis($mokinys['pazymiai']['matematika']))?></td>
        <td><?php echo $bvid = round((round(vidurkis($mokinys['pazymiai']['lietuviu'])) + round(vidurkis($mokinys['pazymiai']['anglu'])) + round(vidurkis($mokinys['pazymiai']['matematika'])))/count($mokinys['pazymiai'])); ?></td>
    </tr>
    <?php endforeach; ?>
        
</table>
</body>
</html>