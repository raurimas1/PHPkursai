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
        rsort($a);

        for ($i=0; $i < count($a); $i++) { 
            echo $a[$i];
            echo '<br>';     
        }    
    ?>
</body>
</html>