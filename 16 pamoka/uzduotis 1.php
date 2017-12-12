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
$values = [];
?>

<?php 
    if (array_key_exists('id', $_GET) && $_GET['id'] > 0) {
        $sql = 'SELECT * FROM radars WHERE `id` = ' . $_GET["id"];
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $values = $result->fetch_assoc();
        }
    }
    if ($_POST['id'] > 0) {
        $sql = "UPDATE radars SET `date` = ?, `number` = ?, `distance` = ?, `time` = ? WHERE id = ?"; 
        $stmt = $conn->prepare($sql);
        
        $stmt->bind_param("ssddi", $_POST['date'], $_POST['number'], 
            $_POST['distance'], $_POST['time'], $_POST['id']);
        $stmt->execute();
        header("Location: " . $_SERVER['PHP_SELF']); /* Redirect browser */
        exit();
    } else if ($_POST['id'] === '') {
        $insert = "INSERT INTO radars(`date`, `number`, `distance`, `time`) VALUES(?, ?, ?, ?)"; 
        $stmt = $conn->prepare($insert);
        $stmt->bind_param("ssdd", $_POST['date'], $_POST['number'], $_POST['distance'], $_POST['time']);
        $stmt->execute();
        header("Location: " . $_SERVER['PHP_SELF']); /* Redirect browser */
        exit();
    }
    if (! empty($_POST['del'])) {
        $sql = "DELETE FROM radars WHERE id = ?"; 
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $_POST['del']);
        $stmt->execute();
        
        
        //bad BAD practise!!!
        //$sql = "DELETE FROM radars WHERE id = ". intval($_POST['del']); 
        //$conn->query($sql);
    }
    
?>

<form action="" method="post">
    <p>data ir laikas: </p>
    <input name="date" type="text" value="<?= $values['date'] ?>">
    <p>numeris</p>
    <input name="number" type="text" value="<?= $values['number'] ?>">
    <p>atstumas</p>
    <input name="distance" type="text" value="<?= $values['distance'] ?>">
    <p>laikas</p>
    <input name="time" type="text" value="<?= $values['time'] ?>">
    
    <input name="id" type="hidden" value="<?= $values['id'] ?>">

    <p><button>ivesti</button>
    
    <p><form action="" method="post">
                    <button> <a href="autp.php">Automobiliai</a></button>
                    
                    <button name="met" type="submit" value="">Metai</button>
                    
                    <button name="men" type="submit" value="">Menuo</button>

                    <button name="men" type="submit" value="<?= $_SERVER['PHP_SELF']?>">Pradiniai duomenys</button>
    </form></p>

<?php
lentele($conn);
function lentele($conn) {
    
    $sql = 'SELECT *, `distance`/`time`*3.6 as `speed` FROM radars ORDER BY `id` ASC';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
        <table border = 1px>
            <tr>
                <th>ID</th>
                <th> numeris</th>
                <th>Data</th> 
                <th>greitis</th>
                <th colspan=2>veiksmai</th>
            </tr>
        
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo round($row['speed']); ?></td>
                    <td><button><a href="?id=<?= $row['id'] ?>">Taisyti</a></button></td>
                    <td><form action="" method="post">
                    <button name="del" type="submit" value="<?= $row['id'] ?>">Trinti</button>
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