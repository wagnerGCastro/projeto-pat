<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$tel = $_POST['telefone'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO empresa (nome, cnpj, telefone, cidade, bairro, uf, cep)
VALUES ('$nome', '$cnpj', '$tel', '$cidade', '$bairro', '$uf', '$cep')";

if ($conn->query($sql) === TRUE) {
    header('Location: sucesso.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>