<?php
        session_start();

        class Radar
        {
            public $date;
            public $number;
            public $distance;
            public $time;

            function __construct($date, $number, $distance, $time){
                $this->date = $date;
                $this->number = $number;
                $this->distance = $distance;
                $this->time = $time;
            }

            public function greitis(){
                $kmPerH = ($this->distance /1000) / ($this->time/3600);
                return $kmPerH;
            }
        }      
       
        if (isset($_SESSION['autos'])){
            $autos = $_SESSION['autos'];
            }else{
             $autos = [];
            }

        if (isset($_REQUEST['number'])) {
            $a = new Radar($_POST['date'], $_POST['number'], $_POST['atstumas'], $_POST['laikas']);
            $autos[] = $a;
            $_SESSION['autos'] = $autos;
        }

        function rusiavimas($x1, $x2){
            if ($x1->greitis() == $x2->greitis()) {
                return 0;
            }elseif ($x1->greitis() > $x2->greitis()) {
                return -1;
            }else {
                return 1;
            }
        }

        usort($autos, 'rusiavimas');   
        
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>12</title>
</head>
<body>
    <h1>Fotikas</h1>
    <form action="" method="post">
        <p>Data ir laikas</p><input type="text" name="date">
        <p>Val. numeris</p><input type="text" name="number">
        <p>Atstumas</p><input type="text" name="atstumas">
        <p>Laikas</p><input type="text" name="laikas">
        <input type="submit" value="nupyškinta">
    </form>
    
        <table border='1'>
        <tr><th>Data ir laikas</th><th>Automobilio numeris</th><th>Greitis</th></tr>
            <?php foreach ($autos as $masina) :?>
        <tr>
            <td><?= $masina->date; ?></td>
            <td><?= $masina->number; ?></td>
            <td><?= round($masina -> greitis(), 1) . '<br>'; ?></td>
        </tr>   
        <?php endforeach; ?>
    </table>

</body>
</html>