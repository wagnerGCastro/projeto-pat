<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$nome = $_POST['nome'];
$sn = $_POST['sn'];
$cod = $_POST['codint'];
$empresa = $_POST['dep'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO equipamento (nome, sn, cod_interno, setor)
VALUES ('$nome', '$sn', '$cod', '$empresa')";

if ($conn->query($sql) === TRUE) {
    header('Location: sucesso.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>