<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>8.3</title>
</head>
<body>
    <?php
        $mokiniai = [
            ['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7], 'anglu' =>[6, 7, 8], 'matematika' => [3, 5, 4]]], 
            ['vardas' => 'Ona', 'pazymiai' => ['lietuviu' => [10, 9, 10], 'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]]
            ];
        
        
        
       
        foreach ($mokiniai as $mokinys) {
            foreach ($mokinys['pazymiai'] as $dalykoPazymiai) {    
                //var_dump($dalykoPazymiai);
                foreach ($dalykoPazymiai as $pazimys) {
                    
                    // echo ($pazimys). '<br>';
                    
                }
            }
        }
        function vidurkis($dalykoPazymiai){
            $suma = 0;
            foreach ($dalykoPazymiai as $pazimys) {
                $suma += $pazimys;
            }
            return $suma / count($dalykoPazymiai);
        }
        
            
        function vidurkiuVidurkis($mokiniai){
            $vid = [];
            foreach ($mokiniai['pazymiai'] as $dalykoPazymiai) {
                $vid += vidurkis($mokiniai);
            }
            echo $vid;
        }

        vidurkiuVidurkis($mokiniai);
    ?>
</body>
</html>