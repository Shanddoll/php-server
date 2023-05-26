<?php

$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'AtoresDB';

$connection = mysqli_connect($server_name, $user_name, $password, $db_name);
$connection->set_charset('utf8');

if (!$connection) {
    die("FALHA NA CONEXÃO ". mysqli_connect_error());
}
