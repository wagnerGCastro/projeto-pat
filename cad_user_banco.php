<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$nome = $_POST['name'];
$senha = $_POST['psw'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO usuario (usuario, senha)
VALUES ('$nome', '$senha')";

if ($conn->query($sql) === TRUE) {
    header('Location: painel.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>