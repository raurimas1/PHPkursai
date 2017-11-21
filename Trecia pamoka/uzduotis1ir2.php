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
    
    //du ciklai- isorinis ir vidinis
    $a = ['Jonas', 'Petras', 'Antanas', 'Povilas'];
    for ($i=0; $i < count($a) - 1 ; $i++) { 
        //echo $a[$i];
        for ($j = $i +1; $j < count($a) ; $j++) { 
            echo $a[$i] . '-' . $a[j];
        }
    }
// if 


        // $a = array('Jonas', 'Petras', 'Antanas', 'Povilas');
        
        
        // foreach ($a as $key => $value) {
        //     for ($i=0; $i < ; $i++) { 
        //         # code...
        //     }
        //      if ($value[$key] != $value[$key+1]) {
        //         $laikinas = $value .'-'. $value;
        //         echo $laikinas;
        //     }
            

           
               
                
        // }
    ?>
</body>
</html>