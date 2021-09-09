<?php
session_start();
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
<div class="p">
    <h1>Registro de Empresa</h1>
</div>
<form method="POST" action="cad_emp_banco.php" class="center-form">
    <div class="container">
        <label for="nome_empresa"><b>Nome da empresa</b></label><br />
        <input type="text" id="nome" placeholder="Nome da empresa" name="nome" required /><br />

        <label for="cnpj"><b>CNPJ</b></label><br />
        <input type="text" id="cnpj" maxlength="" placeholder="xx.xxx.xxx/xxxx-xx" name="cnpj" required /><br />

        <label for="telefone"><b>Telefone de contato</b></label><br />
        <input type="tel" id="telefone" placeholder="(xx) xxxx-xxxx" name="telefone" /><br />

        <div class="p">
            <label for="Endereco">
                <b><h2>Endereço</h2></b>
            </label>
            <br />
        </div>

        <label for="cidade"><b>Cidade</b></label><br />
        <input type="text" id="cidade" placeholder="Cidade" name="cidade" required /><br />

        <label for="bairro"><b>Bairro</b></label><br />
        <input type="text" id="bairro" placeholder="Endereço" name="bairro" required /><br />

        <label for="UF"><b>UF</b></label><br />
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

        <label for="cep"><b>CEP</b></label><br />
        <input type="text" id="cep" placeholder="xxxx-xxxx" name="cep" required /><br />
        <button type="submit" class="registerbtn">Registrar</button>
    </div>
</form>
