<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>11</title>
</head>
<body>
    <?php
        class Radar
        {
            public $date;
            public $number;
            public $distance;
            public $time;

            function __construct($date, $number, $distance, $time){
                $this->date = new DateTime($date);
                $this->number = $number;
                $this->distance = $distance;
                $this->time = $time;
            }

            public function greitis(){
                $kmPerH = ($this->distance /1000) / ($this->time/3600);
                return $kmPerH;
            }
        }

        $a = [
            new Radar('2017-11-27T12:15:06', 'ABC111', 700, 25),
            new Radar('2017-11-26T13:22:17', 'BCA159', 854, 22),
            new Radar('2017-11-26T09:17:55', 'ZXC753', 1200, 113),
            new Radar('2017-11-27T17:25:16', 'QWE456', 952, 78)
        ];

        function rusiavimas($x1, $x2){
            if ($x1->greitis() == $x2->greitis()) {
                return 0;
            }elseif ($x1->greitis() > $x2->greitis()) {
                return -1;
            }else {
                return 1;
            }
        }

        usort($a, "rusiavimas");
        
    ?>
        <table border='1'>
        <tr><th>Automobilio numeris</th><th>Greitis</th></tr>
            <?php foreach ($a as $masina) :?>
        <tr>
            <td><?= $masina->number; ?></td>
            <td><?= round($masina -> greitis(), 1) . '<br>'; ?></td>
        </tr>   
        <?php endforeach; ?>
    </table>
</body>
</html>