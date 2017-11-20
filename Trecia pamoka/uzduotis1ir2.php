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
        $a = array('Jonas', 'Petras', 'Antanas', 'Povilas');
        
        
        foreach ($a as $key => $value) {
            if ($value[$key] != $value[$key+1]) {
                echo $value[$key];
                echo '<br>';
                echo $value[$key+2];
            }
            echo $value;

           echo $value;
               
                
        }
    ?>
</body>
</html>