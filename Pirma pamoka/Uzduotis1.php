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
    $a = 2; $b = 10; $c = 8;
    if ($a + $b != $c && $a + $c != $b) {
             echo "skaiciai {$a} {$b} {$c} gali buti trikampio krastiniu ilgiai,\n";
             if ($a != $b && $a != $c && $b != $c) {
                echo "ivairakrastis trikampis\n ";
                if ($a == $b && $a == $c && $b == $c){
                    echo "lygiakrastis trikampis";}
                    if ($a == $b && $a != $b || $a == $c && $a != $b){
                        echo "lygiasonis trikampis";
                    }
                }
            }
            else {
            echo "skaiciai {$a} {$b} {$c} negali buti trikampio krastiniu ilgiai,\n";}
    
    $a = 3; $b = 4; $c = 5;
    if ($a + $b != $c && $a + $c != $b) {
            echo "skaiciai {$a} {$b} {$c} gali buti trikampio krastiniu ilgiai,\n";
            if ($a != $b && $a != $c && $b != $c) {
                echo "ivairakrastis trikampis\n ";
                if ($a == $b && $a == $c && $b == $c){
                    echo "lygiakrastis trikampis";}
                    if ($a == $b && $a != $b || $a == $c && $a != $b){
                        echo "lygiasonis trikampis";
                    }
                }
            }
            else {
            echo "skaiciai {$a} {$b} {$c} negali buti trikampio krastiniu ilgiai,\n";}
     
    $a = 5; $b = 5; $c = 5;
    if ($a + $b != $c) {
        if ($a + $c != $b) {
            echo "skaiciai {$a} {$b} {$c} gali buti trikampio krastiniu ilgiai,\n";
            if ($a != $b && $a != $c && $b != $c) {
                echo "ivairakrastis trikampis\n ";}
                if ($a == $b && $a == $c && $b == $c){
                    echo "lygiakrastis trikampis";}
                    if ($a == $b && $a != $b || $a == $c && $a != $b){
                        echo "lygiasonis trikampis";}
                    }
        }
            else {
            echo "skaiciai {$a} {$b} {$c} negali buti trikampio krastiniu ilgiai,\n";
    }   
    $a = 5; $b = 6; $c = 5;
    if ($a + $b != $c) {
        if ($a + $c != $b) {
            echo "skaiciai {$a} {$b} {$c} gali buti trikampio krastiniu ilgiai.\n";
            if ($a != $b && $a != $c && $b != $c) {
                echo "ivairakrastis trikampis\n ";}
                if ($a == $b && $a == $c && $b == $c){
                    echo "lygiakrastis trikampis";}
                    if ($a == $b && $a != $b || $a == $c && $a != $b){
                        echo "lygiasonis trikampis";}
                }
            }
            else {
            echo "skaiciai {$a} {$b} {$c} negali buti trikampio krastiniu ilgiai.\n";}
     ?></p>
</body>
</html>