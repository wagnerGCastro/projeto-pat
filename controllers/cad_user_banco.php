<?php

// require_once('../config/conf_banco.php');

print($_POST['name']);
print($_POST['password']);

// $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$nome', '$senha')";

// if ($conn->query($sql) === TRUE) {
//     header('Location: painel.php');
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$_SESSION['nao_autenticado'];
// $conn->close();
