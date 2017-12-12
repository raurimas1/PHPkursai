<!DOCTYPE html>
<html>
    <head>
        <title>15 Užduotis</title>
        <meta charset="UTF-8">
    </head>
<body>
<h1>Fotikas</h1>
<?php
$servername = "localhost";
$username = "Auto";
$password = "LabaiSlaptas123";
$dbname = "Auto";
$datatable = "radars"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Nepavyko prisijungti: " . $conn->connect_error);
} 
?>
<?php
    if (($_GET['met'])== 'met') {
        $sql = "SELECT number, YEAR(date), COUNT(number) AS kiekis, MAX(distance/time*3.6) AS maxgreitis, MIN(distance/time*3.6) AS mingreitis
        FROM radars GROUP BY date";
        $conn->query($sql);
    }
?>



    
    <p><form action="" method="get">
                    <button> <a href="autp.php">Automobiliai</a></button>
                    
                    <button name="met" type="submit" value="met">Metai</a></button>
                    
                    <button name="men" type="submit" value="">Menuo</button>

                    <button> <a href="uzduotis 1.php">Pradiniai duomenys</a></button>
    </form></p>

<?php
lentele($conn);
function lentele($conn) {
    
    $sql = 'SELECT number, COUNT(*) AS kiekis, MAX(distance/time*3.6) AS maxgreitis, MIN(distance/time*3.6) AS mingreitis
     FROM radars GROUP BY number';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
        <table border = 1px>
            <tr>
                
                <th> numeris</th>
                <th>kiekis</th>
                <th>max greitis</th>
                <th>min greitis</th>
                
                
            </tr>
        
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['kiekis']; ?></td>
                    <td><?php echo $row['maxgreitis']; ?></td>
                    <td><?php echo $row['mingreitis']; ?></td>
                    
                    
                    </form></td>
                </tr>
            <?php endwhile; ?>
        
        </table>

        <?php
    } else {
        echo 'Nėra duomenų';
    }
    $conn->close();
}
?>
</body>
</html>