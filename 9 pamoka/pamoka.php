<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

    class Zmogus
    {
        public $vardas;
        public $pavarde;

        function __contruct($vardas, $pavarde){
            $this->vardas = $vardas;
            $this->pavarde = $pavarde;
        }
    }
    
    $zmones = (
        new Zmogus('Jonas', 'Jonaitis')
    );

    // $zmones = [['vardas' => 'Jonas', 'pavarde' => 'Jonaitis'],
    //            ['vardas' => 'Petras', 'pavarde' => 'Petraitis'],
    //            ['vardas' => 'Antanas', 'pavarde' => 'Antanaitis']];
    ?>
    <table border="1">
        <tr><th>Vardas</th><th>Pavarde</th></tr>
    
    <?php foreach ($zmones as $laukas => $reiksme) :?>
    <tr>
        <td><?= $Zmogus->vardas ?></td>
        <td><?= $Zmogus->pavarde ?></td>
    </tr>
<?php endforeach; ?>
    </table>
    
</body>
</html>