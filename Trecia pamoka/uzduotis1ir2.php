<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>7.1 ir 7.2</title>
</head>
<body>
    <?php

    //du ciklai- isorinis ir vidinis
    // I uzduotis (Jus viska paraset ant lentos :) )
    $a = ['Jonas', 'Petras', 'Antanas', 'Povilas'];
    for ($i=0; $i < count($a) - 1 ; $i++) { 
        for ($j = $i +1; $j < count($a) ; $j++) { 
            echo $a[$i] . "-" . $a[$j] . '<br>';
        }
    }

echo "<br>";
echo "<br>";

    // II uzduotis
    for ($i=0; $i < count($a); $i++) { 
        for ($j= 0; $j < count($a); $j++) { 
            if ($a[$i] != $a[$j]) {
                Echo $a[$i] . "-" . $a[$j] . '<br>';
            }
        }
    }
    ?>
</body>
</html>