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
        $a = array(-10, 0, 2, 9, -5);        
        
        for ($j = 0; $j < count($a); $j++) {
            for ($i = 0; $i < count($a)-1; $i++) {
                if ($a[$i] < $a[$i+1]) {
                    $laikinas = $a[$i+1];
                    $a[$i+1] = $a[$i];
                    $a[$i] = $laikinas;
                    
                }
            }
        }

        for ($j=0; $j < count($a); $j++) { 
            echo $a[$j];
            echo '<br>';
        }

              
        // rsort($a);
        // for ($i=0; $i < count($a); $i++) { 
        //     echo $a[$i];
        //     echo '<br>';     
        // }    
    ?>
</body>
</html>