<?php
session_start();
include('veri_login.php');
include('con_banco.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  p#mostrar{display:none}
  table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

  td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

  tr:nth-child(even) {
      background-color: #dddddd;
    }
  body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    }

  .navbar {
      overflow: hidden;
      background-color: #E6E6E6; 
    }

  .navbar a {
      float: left;
      font-size: 16px;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

  .subnav {
      float: left;
      overflow: hidden;
    }

  .subnav .subnavbtn {
      font-size: 16px;  
      border: none;
      outline: none;
      color: black;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

  .navbar a:hover, .subnav:hover .subnavbtn {
      background-color: #BDBDBD;
    }

  .subnav-content {
      display: none;
      position: absolute;
      left: 0;
      background-color: #D8D8D8;
      width: 100%;
      z-index: 1;
    }

  .subnav-content a {
      float: left;
      color: black;
      text-decoration: none;
    }

  .subnav-content a:hover {
      background-color: #eee;
      color: black;
    }

  .subnav:hover .subnav-content {
      display: block;
    }
     /* Começa o estilo do contato */ 

  html {
      box-sizing: border-box;
    }

    *, *:before, *:after {
      box-sizing: inherit;
    }

  .column {
      float: left;
      width: 15%;
      margin-bottom: 16px;
      padding: 0 5px;
    }

  @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
      padding: 0 16px;
    }

    .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }

    .button:hover {
      background-color: #555;
    }
  * {box-sizing: border-box}
  body {font-family: "Lato", sans-serif;}

  /* Style the tab */
  .tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
  }

  /* Style the buttons inside the tab */
  .tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
    background-color: #ddd;
  }

  /* Create an active/current "tab button" class */
  .tab button.active {
    background-color: #ccc;
  }

  /* Style the tab content */
  .tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
  }
  div.p{
    text-align: center;
  }
</style>
</head>
<body>
<div class="navbar">
  <a href="painel.php">Pagina Inicial</a>
  <a href="painf_inf_relat.php">Relatórios</a>
  <div class="subnav">
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Cadastro <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="pag_cad_emp.php">Empresa</a>
      <a href="pag_cad_equip.php">Equipamento</a>
      <a href="pag_cad_func.php">Funcionario</a>
      <a href="pag_cad_cc.php">Departamento</a>
      <a href="#express">Fornecedor</a>
    </div>
  </div>
  <a href="qrcode.php">QR Code</a>
  <a href="logout.php">Sair</a>
</div>

  <div class="p"><h2>Selecione o Relatorio desejado</h2>
  </div>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'empresas')" id="defaultOpen">Empresas Cadastradas</button>
  <button class="tablinks" onclick="openCity(event, 'usuarios')">Usuarios</button>
  <button class="tablinks" onclick="openCity(event, 'dep')">Setor</button>
  <button class="tablinks" onclick="openCity(event, 'Equipamento')">Equipamentos</button>
</div>

<div id="Equipamento" class="tabcontent">
    <table >
      <th>S/N</th>
      <th>Codigo Interno</th>
      <th>Departamento</th>
      <th>Nome</th>
      <th>QR Code</th>
      <?php
      $result_usuarios = "select * from equipamento";
      $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
      while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
        echo "<tr><td>".$row_usuario['sn']."</td>";
        echo "<td>".$row_usuario['cod_interno']."</td>";
        echo "<td>".$row_usuario['setor']."</td>";
        echo "<td>".$row_usuario['nome']."</td>";
      }
      ?>
       Gerar QR</td>
    </table>
  </div>

<div id="empresas" class="tabcontent">
    <table >
      <th>Empresa</th>
      <th>Cnpj</th>
      <th>Telefone</th>
      <th>Cidade</th>
      <th>Bairro</th>
      <th>UF</th>
      <th>CEP</th>
      <?php
      $result_usuarios = "select * from empresa";
      $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
      while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
        echo "<tr><td>".$row_usuario['nome']."</td>";
        echo "<td>".$row_usuario['cnpj']."</td>";
        echo "<td>".$row_usuario['telefone']."</td>";
        echo "<td>".$row_usuario['cidade']."</td>";
        echo "<td>".$row_usuario['bairro']."</td>";
        echo "<td>".$row_usuario['uf']."</td>";
        echo "<td>".$row_usuario['cep']."</td>";
      }
      ?>
    </table>
  </div>

<div id="usuarios" class="tabcontent">
      <table>
      <th>Nome</th>
      <th>Senha</th>
      <?php
      $result_usuarios = "select * from usuario";
      $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
      while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
        echo "<tr><td>".$row_usuario['usuario']."</td>";
        echo "<td>".$row_usuario['senha']."</td>";
      }
      ?>
      <td> <a href="sucesso.php"> QR</td>
    </table>
  </div>

<div id="dep" class="tabcontent">
   <table>
      <th>Codigo</th>
      <th>Nome</th>
      <?php
      $result_usuarios = "select * from centro_custo";
      $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
      while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
        echo "<tr><td>".$row_usuario['cod']."</td>";
        echo "<td>".$row_usuario['nome']."</td>";
      }
      ?>
    </table>
  </div>

<script>
function chama(link)
{
window.location.href = 'sucesso.php';
}
</script>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
