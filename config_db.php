<?php

$server_name = 'containers-us-west-84.railway.app:7544';
$user_name = 'root';
$password = '9LPyrf8Xq2TorNuwmsoP';
$db_name = 'railway';

$connection = mysqli_connect($server_name, $user_name, $password, $db_name);
$connection->set_charset('utf8');


if (!$connection) {
    die("FALHA NA CONEXÃO ". mysqli_connect_error());
}
echo "Conectado!!!";