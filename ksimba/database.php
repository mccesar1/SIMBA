<?php

$server = 'localhost';//añadir el puerto si no funciona asi
$username = 'root';
$password = '';
$database = 'becas3';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}


 ?>
