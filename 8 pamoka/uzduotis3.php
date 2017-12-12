<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>8.3</title>
</head>
<body>
    <?php
        $mokiniai = [
            ['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7], 'anglu' =>[6, 7, 8], 'matematika' => [3, 5, 4]]], 
            ['vardas' => 'Ona', 'pazymiai' => ['lietuviu' => [10, 9, 10], 'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]],
            ['vardas' => 'Antanas', 'pazymiai' => ['lietuviu' => [7, 9, 10], 'anglu' => [6, 8, 10], 'matematika' => [2, 10, 9, 9]]]
            ];
        
        
        foreach ($mokiniai as $mokinys) {
            foreach ($mokinys['pazymiai'] as $pazymys) {    
               
            }
        }
        
        function semestras($mokiniai){
            foreach ($mokiniai as $mokinys) {   
                $vid = 0;             
                foreach ($mokinys['pazymiai'] as $pazymys) {
                                $vid += vidurkis($pazymys);
                            }
                            $vid = round($vid / count($mokinys['pazymiai']));
                            echo $mokinys['vardas'] . " ". $vid . "<br>";    
            }
            return $vid;    
        }

        function vidurkis($pazymys){
            $suma = 0;
            foreach ($pazymys as $ivertinimas) {
                $suma += $ivertinimas;
            }
            $vidurkio = round($suma / count($pazymys));
            return $vidurkio;
            
        }


        semestras($mokiniai);
        
        
    ?>
</body>
</html>