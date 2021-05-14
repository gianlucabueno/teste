<?php
$servername = "172.18.0.60";
$username = "root";
$password = "root";
$dbname = "ESTAGIO";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE SensorTeste (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname DATE(30) NOT NULL,
    lastname INT(30) NOT NULL,
    );

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>