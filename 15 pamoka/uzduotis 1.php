
<?php 

$servername = 'localhost';
$dbname = 'auto';
$username = 'Auto';
$password = 'LabaiSlaptas123';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Nepavyko prisjungti: ' . $conn->connect_error);
}

$values = [];
if (! empty($_POST['edit']) && $_POST['edit'] > 0) {
    $sql = "SELECT * FROM radars where id = " . $_POST['edit'];
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $values = $result->fetch_assoc();
    }
    // $update = $_POST['edit'];
    // $sql = "SELECT * FROM radars WHERE 'id' = $update";
    $date = $_POST['date'];
    $number = $_POST['number'];
    $distance = $_POST['distance'];
    $time = $_POST['time'];


    $sql = "UPDATE radars SET `number` = ?, `date` = ?, `distance` = ?, `time` = ? WHERE id = ?"; 
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("ssddi", $_POST['number'], $_POST['date'], 
        $_POST['distance'], $_POST['time'], $_POST['edit']);
    $stmt->execute();
    // $sql = "UPDATE radars SET `date` = ?, `number` = ?, distance = ?, `time` = ? WHERE id = ?";
    // $stmt = $conn->prepare($sql);  
    // $stmt->bind_param("ssddi", $_POST['number'], $_POST['date'], $_POST['distance'], $_POST['time'], $_POST['id']);
    // $stmt->execute();
    
    //$sql = "SELECT * FROM radars"
    


}

if (! empty($_POST['add'])) {
    $date = $_POST['date'];
    $number = $_POST['number'];
    $distance = $_POST['distance'];
    $time = $_POST['time'];

    $sql = "INSERT INTO radars(date, number, distance, time) VALUES('$date','$number','$distance','$time')";
    $insert = $conn->query($sql); 

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
<!DOCTYPE html>
<html>
    <head>
        <title>Demo 1</title>
        <meta charset="UTF-8">
    </head>
<body>
<h1>Fotikas</h1>
<form action="" method="post">
    <p>Data ir laikas: <input type="text" name="date" value="<?= $row['date'] ?>"></p>
    <p>Val. numeris: <input type="text" name="number" value="<?= $row['number'] ?>"></p>
    <p>Atstumas: <input type="text" name="distance" value="<?= $row['distance'] ?>"></p>
    <p>Laikas: <input type="text" name="time" value="<?= $row['time'] ?>"></p>
    <input name="add" type="submit" value="nupyškinta (Irasyti)"></p>
</form>

<?php
$sql = 'SELECT `id`,`number`, `distance`/`time`*3.6 as `speed`, `date` FROM radars ORDER BY `number`, `date` DESC';
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    ?>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Numeris</th>
            <th>Data</th>
            <th>Greitis</th>
            <th colspan="2">Veiksmai</th>
        </tr>
    
<?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo round($row['speed']); ?></td>
            <td><form action="" method="post">
                <button name="edit" type="submit" value="<?= $row['id'] ?>">Pakeisti</button>
            </form></td>
            <td>
            <form action="" method="post">
                <button name="del" type="submit" value="<?= $row['id'] ?>">Trinti</button>
            </form>
            </td>
        </tr>
        <?php
    }
    echo '</table>';

    }
$conn->close();
?>
</body>
</html>