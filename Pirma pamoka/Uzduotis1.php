<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uzduotis 1 ir 2</title>
</head>
<body><p>
    <?php

    function tikrinimas($a, $b, $c){
        if ($a + $b != $c && $a + $c != $b && $b + $c != $a) {
            echo "{$a} {$b} {$c} gali,\n";
            if ($a != $b && $a != $c && $b != $c) {
                echo "ivairakrastis".'<br>';}
            if ($a == $b && $a == $c && $b == $c){
                echo "lygiakrastis".'<br>';}
            if ($a == $b && $a != $b || $a == $c && $a != $b){
                echo "lygiasonis".'<br>';}
                }
        else {
            echo "{$a} {$b} {$c} negali".'<br>';}
            }


    
    tikrinimas(2, 10, 8);
                
            
    tikrinimas(3, 4, 5);
            
     
    tikrinimas(5, 5, 5);
                    
     
    tikrinimas(5, 6, 5);
            
     ?></p>
</body>
</html>