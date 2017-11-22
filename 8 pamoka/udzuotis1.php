<?php
    $zmones = [ 
        ['vardas' => 'Jonas', 'lytis' => 'V'],
        ['vardas' => 'Ona', 'lytis' => 'M'], 
        ['vardas' => 'Petras', 'lytis' => 'V'], 
        ['vardas' => 'Marytė', 'lytis' => 'M'], 
        ['vardas' => 'Eglė', 'lytis' => 'M']
        ]; 

    for ($i=0; $i < count($zmones); $i++) { 
        foreach ($zmones[$i] as $key=> $value) {
            echo $value;
            echo $kedy;
        }
    }
    ?>