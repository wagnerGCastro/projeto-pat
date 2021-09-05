<?php
session_start();
include('conexao.php');
 
$sql = mysqli_query("Select * From empresas");
while($exibe = mysqli_fetch_assoc($sql)){
  echo $exibe['nome'] .'<br>';
}
?>