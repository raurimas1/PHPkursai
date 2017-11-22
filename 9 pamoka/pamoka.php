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
        public $vard;
        public $pavarde;

        function __construct($vard, $pavarde){
            $this->vardas = $vard;
            $this->pavarde = $pavarde;
        }
    }
    
    $zmones = [
        new Zmogus("Jonas", "Jonaitis"),
        new Zmogus('Petras', 'Petraitis'),
        new Zmogus('Antanas', 'Antanaitis')
        ];
    ?>
    <table border="1">
        <tr><th>Vardas</th><th>Pavarde</th></tr>    
            <?php foreach ($zmones as $zmogus):?>
        <tr>
            <td><?php echo $zmogus->vardas ?></td>
            <td><?= $zmogus->pavarde ?></td>
        </tr>
            <?php endforeach; ?>
    </table>
    
</body>
</html>