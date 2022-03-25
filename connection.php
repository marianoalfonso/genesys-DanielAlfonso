<?php

$servidor = 'localhost';
$usuario = 'root';
$password = '';
$db = 'daniel_alfonso';
$conn = mysqli_connect($servidor, $usuario, $password, $db);

if (!$conn) {
    die('error conectando la DB'.mysqli_connect_error());
} else {
    echo('db conectada correctamente<br>');
}

mysqli_query($conn, "SET NAMES 'utf-8'");

?>