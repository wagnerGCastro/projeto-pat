<?php
  session_start();
  include('veri_.php');
?>


<div class="navbar">
    <a href="painel.php">Pagina Inicial</a>
    <a href="painf_inf_relat.php">Relatórios</a>
    <div class="subnav"></div>
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
<form method="POST" action="data/cad_cc_banco.php" class="center-form">
    <div class="container">
        <div class="p">
            <h1>Registro de Equipamento</h1>
        </div>

        <label for="nome_empresa"><b>Nome do Centro de custo: </b></label><br />
        <input type="text" id="nome" name="nome" required /><br />
        <button type="submit" class="registerbtn">Registrar</button>
    </div>
</form>
