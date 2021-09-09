<?php
  session_start();
  include('verifica_login.php');
  include('conexao.php');
?>



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

<form method="POST" action="cadastroEquipamentoBanco.php" class="center-form">
    <div class="container">
      <div class="p">
      <h1>Registro de Equipamento</h1>
        </div>
   
      <label for="nome_empresa"><b>Nome do equipamento: </b></label><br>
      <input type="text" id="nome" name="nome" required/><br/>

      <label for="s/n"><b>S/N: </b></label><br>
      <input type="text" id="sn" name="sn" required/><br/>

      <label for="cod"><b>Codigo de Identificação (interno): </b></label><br>
      <input type="text" id="codint" name="codint"/><br/>
      
      <label for="Selecione"><b>Selecione Centro de Custo:</b> </label>
      <select id="dep"name="dep" >
        <option value>Selecione...</option>
        <?php
            $result_usuarios = "select * from centro_custo";
            $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
            while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
                echo "<option value>".$row_usuario['nome']."</option>";
            }
        ?>
      </select>
      <button href="sucesso.php" type="submit" class="registerbtn">Registrar</button>
    </div>
</form>
