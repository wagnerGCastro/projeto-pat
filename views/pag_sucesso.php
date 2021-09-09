<?php
  session_start();
  include('../controllers/verifica_login.php');
?>

<!--Seta o titulo da Pagina-->
<script>
    document.title = 'Pagina de Sucesso';
</script>


<div class="navbar">
    <a href="painel.php">Pagina Inicial</a>

    <a href="relatorio.php">Relatórios</a>

    <div class="subnav">
        <button class="subnavbtn">Editar <i class="fa fa-caret-down"></i></button>

        <div class="subnav-content">
            <a href="#team">Perfil</a>

            <a href="#careers">Financeiro</a>
        </div>
    </div>

    <div class="subnav">
        <button class="subnavbtn">Cadastro <i class="fa fa-caret-down"></i></button>

        <div class="subnav-content">
            <a href="cadastrar_empresa.php">Empresa</a>

            <a href="cadastroEquipamento.php">Equipamento</a>

            <a href="#deliver">Funcionario</a>

            <a href="#package">Departamento</a>

            <a href="#express">Fornecedor</a>
        </div>
    </div>

    <a href="qrcode.php">QR Code</a>

    <a href="logout.php">Sair</a>
</div>

<div class="p">
    <h1>CADASTRO CONCLUÍDO COM SUCESSO!</h1>
</div>
