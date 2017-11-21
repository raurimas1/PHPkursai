<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6.2</title>
</head>
<body>
    <?php
        
        for ($i=1; $i <= 1000; $i++) { 
            if (artobulas($i)) {
                
            }
        }

        function artobulas($x){
                $ats = array();
                $y = 1;
                while ($x > $y) {
                    if ($x % $y == 0) {
                        array_unshift($ats, $y);
                    }
                    $y++;
                }
                if ($x == array_sum($ats)) {
                    echo $x;
                    echo '<br>';
            }
        }
    ?>
</body>
</html>