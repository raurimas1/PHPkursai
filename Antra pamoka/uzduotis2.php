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
        // $a = array();
        // $i = 0;
        // for ($i =1; $i <= 1000; $i++) { 
        //     // echo $i;
        //     // echo '<br>';
        // }
        $b = array(1, 2, 3, 4, 5, 6, 7, 8);

        function dalikliai($a) {
            $ats = array();
            $i = 1;
            while ($a > $b[i]) {
            array_unshift($ats, $a % $b[i] == 0);
            $a = ($a - $a % 10) / 10;
            }
            return $ats;
            }
            $s = dalikliai(142);
            echo $s[0] . '-' . $s[1] . '-' . $s[2];
        // function daliklis(){
        //     $x = 1;
        //     while ($x <= $i) {
                
        //     }
        // }

        // function suma(){
        //     if ($i == $i) {
        //         # code...
        //     }
        // }
    ?>
</body>
</html>