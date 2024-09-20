<?php
$server = "localhost";
$username = "root";
$password = "0801";
$dbname = "animales_web";

$connection = new mysqli ( $server, $username, $password, $dbname );
$connection->set_charset("utf8");
if ($connection->connect_error) {
    die("Fallo la conexion". $connection->connect_error);
}

?>