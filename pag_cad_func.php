<?php
  include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Cadastro Funcionarios</title>
</head>
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
	<div class="p"><h2>Cadastro de Funcionário</h2></div>
	<form class="center-form" method="POST" action="cadastro_funcionario">

		<label for="nome_funcionario"><b>Nome do Funcionário</b></label>
		<input type="text" name="nome" required>

		<label</label>
		
	</form>
</body>
</html>