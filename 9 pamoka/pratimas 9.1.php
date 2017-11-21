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

    <?php foreach ($mokiniai as $vard): ?>
    <tr>
        <td><?php echo $vard['vardas']; ?></td>
        <td><?php  ?></td>
        <td><?php  ?></td>
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