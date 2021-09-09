<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'serv');

$conn = new mysqli(HOST, USUARIO, SENHA, DB);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
