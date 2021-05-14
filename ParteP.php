<?php
$servername = "172.18.0.60";
$username = "root";
$password = "root";
$dbname = "ESTAGIO";
$sensorID = 1;
$dia = "2021-07-15";
$prdict = 2;


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$data = [
    'sensor' => $sensorID,
    'dia' => $dia,
    'pred' => $prdict,
];

$sql = "INSERT INTO teste (sensor, dia, pred) VALUES (:sensorid, :dia, :pred)";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);

echo $stmt->rowCount();
} catch(PDOException $e) {
echo 'Error: ' . $e->getMessage();

}?>