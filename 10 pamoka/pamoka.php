<?php
    
    class Zmogus{
        public $vardas;
        public $pavarde;
        public $trimestras;

        function __construct($a, $b, $trimestras){
            $this->vardas = $a;
            $this->pavarde = $b;
            $this->trimestras = $trimestras;
        }
        function vidurkis(){
            if ($this->trimestras) {
             $suma = 0;
            foreach ($this->trimestras as  $balas) {
                $suma += $balas;
            }
            return $suma / count($this->trimestras);
        } else {
            echo "0";
        }
    }
    }
    
    $zmones1 = [
        new Zmogus('petras', 'petraitis', ['anglu' => 10, 'lietuviu' => 9]),
        new Zmogus('jonas', 'jonaitis', ['anglu' => 8, 'lietuviu' => 7])
    ];

    $zmones1[] = new Zmogus('antanas', 'antanaitis', ['anglu' => 10, 'lietuviu' => 9]);

    //array_push($zmones1, ['vardas'=> 'petras']);

    foreach ($zmones1 as $value) {
        echo $value->pavarde . '-' . $value->vidurkis() .'<br>';
    }
    for ($i=0; $i < count($zmones1); $i++) { 
        echo $zmones1[$i] ->pavarde . '-' . $zmones1[$i] -> vidurkis();
    }
    echo $zmones1[1] ->vardas;
    var_dump($zmones1[0]);
?>