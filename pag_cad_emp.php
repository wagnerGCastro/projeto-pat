<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;
  }
  div.p{
    text-align: center;
  }

  * {
    box-sizing: border-box;
  }

  /* Add padding to containers */
  .container {
    padding: 16px;
    background-color: white;
  }

  /* Full-width input fields */
  input[type=text], input[type=password], input[type=tel], select {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  input[type=text]:focus, input[type=password]:focus, input[type=tel]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Overwrite default styles of hr */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* Set a style for the submit button */
  .registerbtn {
    background-color: #000000;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  .registerbtn:hover {
    opacity: 1;
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
  <div class="p">
      <h1>Registro de Empresa</h1> </div>
  <form method="POST" action="cad_emp_banco.php" class="center-form">
    <div class="container">

      <label for="nome_empresa"><b>Nome da empresa</b></label><br>
      <input type="text" id="nome" placeholder="Nome da empresa" name="nome" required/><br/>

      <label for="cnpj"><b>CNPJ</b></label><br>
      <input type="text" id="cnpj" maxlength="" placeholder="xx.xxx.xxx/xxxx-xx" name="cnpj" required/><br/>

      <label for="telefone"><b>Telefone de contato</b></label><br>
      <input type="tel" id="telefone" placeholder="(xx) xxxx-xxxx" name="telefone"/><br/>

      <div class="p">
      <label for="Endereco"><b><h2>Endereço</h2></b></label><br></div>

      <label for="cidade"><b>Cidade</b></label><br>
      <input type="text" id="cidade" placeholder="Cidade" name="cidade" required/><br/>

      <label for="bairro"><b>Bairro</b></label><br>
      <input type="text" id="bairro" placeholder="Endereço" name="bairro" required/><br/>

      <label for="UF"><b>UF</b></label><br>
      <select id="uf" name="uf" name="uf">
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
      </select>

      <label for="cep"><b>CEP</b></label><br>
      <input type="text" id="cep" placeholder="xxxx-xxxx" name="cep" required/><br/>
      <button type="submit" class="registerbtn">Registrar</button>
    </div>
  </form>	
</body>
</html>