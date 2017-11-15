<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>uzduotis 2</title>
</head>
<body>
    <?php 
        $a = 3; $b = 4; $c = 5;
        $p = ($a + $b + $c)/2;
        $y = $p * ($p - $a) * ($p - $b) * ($p - $c);
        $x = sqrt($y);
        echo $x;
?><br>asd
       <?php $a = 5; $b = 5; $c = 5;
        $p = ($a + $b + $c)/2;
        $y = $p * ($p - $a) * ($p - $b) * ($p - $c);
        $x = sqrt($y);
        echo $x;
?><br>
        <?php
        $a = 5; $b = 6; $c = 5;
        $p = ($a + $b + $c)/2;
        $y = $p * ($p - $a) * ($p - $b) * ($p - $c);
        $x = sqrt($y);
        echo $x;
    ?>
</body>
</html>