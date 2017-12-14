<!DOCTYPE html>
<html lang="en">
<head>
    <title>Uzdavinys</title>
</head>
<body>
<?php

    
    class Mokinys 
    {
        public $vardas;
        public $pavarde;
        public $trimestras;

        function __construct($vardas, $pavarde, $trimestras) {
            $this->vardas = $vardas;
            $this->pavarde = $pavarde;
            $this->trimestras = $trimestras;
            

        }
        function vidurkis(){
            $suma = 0;
            foreach ($this->trimestras as $pazymys) {
                $suma += $pazymys;
            } return $suma/count($this->trimestras);
        }
    }
    
    $mokiniai = [
        new Mokinys("Jonas", "Jonaitis", ['lietuviu' => 8, 'matematika' => 9, 'anglu' => 8]),
        new Mokinys('Petras', 'Petraitis', ['lietuviu' => 4, 'matematika' => 5, 'anglu' => 2]),
        new Mokinys('Antanas', 'Antanaitis', ['lietuviu' => 10, 'matematika' => 9, 'anglu' => 8])
    ];
    function rusiavimas($x1, $x2){
        if ($x1->vidurkis() == $x2->vidurkis()) {
            return 0;
        }elseif ($x1->vidurkis() > $x2->vidurkis()) {
            return -1;
        }else {
            return 1;
        }
    }

    usort($mokiniai, "rusiavimas");
    ?>
    <table border="1">
        <tr><th>Vardas</th><th>Pavarde</th><th>Trimestro vidurkis</th></tr>    
            <?php foreach ($mokiniai as $zmogus):?>
        <tr>
            <td><?php echo $zmogus->vardas ?></td>
            <td><?= $zmogus->pavarde ?></td>
            <td><?= round($zmogus->vidurkis($zmogus->trimestras), 1) ?></td>
        </tr>
            <?php endforeach; ?>
    </table>
    
</body>
</html>