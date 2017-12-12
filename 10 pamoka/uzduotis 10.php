<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>10</title>
</head>
<body>
    <?php
        class Mokinys 
        {
            public $vardas;
            public $pavarde;
            public $trimestras;
            public $gimimoData;
    
            function __construct($vardas, $pavarde, $trimestras, $gimimoData) {
                $this->vardas = $vardas;
                $this->pavarde = $pavarde;
                $this->trimestras = $trimestras;
                $this->gimimoData = new DateTime($gimimoData);
                
    
            }
            function vidurkis($pazymiai){
                $suma = 0;
                foreach ($this->trimestras as $pazymys) {
                    $suma += $pazymys;
                } return $suma/count($this->trimestras);
            }
            function dabarMetu($gimimoData){
                $dabar = new DateTime();
                $skirtumas = date_diff($dabar, $gimimoData);
                return $skirtumas->y;
            }
        }
        
        $mokiniai = [
            new Mokinys("Jonas", "Jonaitis", ['lietuviu' => 8, 'matematika' => 9, 'anglu' => 8], '1999-05-01'),
            new Mokinys('Petras', 'Petraitis', ['lietuviu' => 4, 'matematika' => 5, 'anglu' => 2], '2006-04-01'),
            new Mokinys('Antanas', 'Antanaitis', ['lietuviu' => 10, 'matematika' => 9, 'anglu' => 8], '1998-01-01')
            ];
       
        ?>
        <table border="1">
            <tr><th>Vardas</th><th>Pavarde</th><th>Trimestro vidurkis</th><th>Dabar metu</th></tr>    
            <?php foreach ($mokiniai as $zmogus):?>
                <?php if ($zmogus->dabarMetu($zmogus->gimimoData) > 17):?>
            <tr>
                <td><?php echo $zmogus->vardas ?></td>
                <td><?= $zmogus->pavarde ?></td>
                <td><?= round($zmogus->vidurkis($zmogus->trimestras), 1) ?></td>
                <td><?= $zmogus->dabarMetu($zmogus->gimimoData) ?></td>
            </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </table>
</body>
</html>