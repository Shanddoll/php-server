<?php

$server_name = 'containers-us-west-84.railway.app';
$user_name = 'root';
$password = '9LPyrf8Xq2TorNuwmsoP';
$db_name = 'railway';

$connection = mysqli_connect($server_name, $user_name, $password, $db_name);
$connection->set_charset('utf8');
echo mysqli_connect_errno();
if (!$connection) {
    die("FALHA NA CONEXÃO ". mysqli_connect_error());
}
