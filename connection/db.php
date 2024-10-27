<?php
$server = "162.241.2.39";
$username = "itsonapp_244266";
$password = "244266db#672Y";
$dbname = "itsonapp_244266";

$connection = new mysqli ( $server, $username, $password, $dbname );
$connection->set_charset("utf8");
if ($connection->connect_error) {
    die("Fallo la conexion". $connection->connect_error);
}

?>