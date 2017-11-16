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
        $a = [5, 6, 10, 15];
        $b = [8, 5, 3, 25];

        function vidurkis($x){
            $y = array_sum($x);
            $y = $y / 4;
            return $y;
        }
        echo vidurkis($a)- vidurkis($b);
    ?>
</body>
</html>