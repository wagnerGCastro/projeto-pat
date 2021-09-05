<?php
  session_start();
?>

<!--Seta o titulo da Pagina-->
<script>
    document.title = 'Cadastro de Usuário';
</script>

<?php
    if(isset($_SESSION['nao_autenticado'])):
?>
    <div class="notification is-danger">
        <p>ERRO: Usuário ou senha inválidos.</p>
    </div>
<?php
    else:
        unset($_SESSION['nao_autenticado']);
    endif;
?>

<form method="POST"  name="cad_user_banco">
    <div class="container">
        <label for="name"><b>Nome de Usuário</b></label>
        <input type="text" id="name" placeholder="Nome de Usuário" name="name" required />

        <label for="psw"><b>Senha</b></label>
        <input type="password" placeholder="Sua Senha" id="psw" name="psw" required />

        <label for="psw-repeat"><b>Repitir Senha</b></label>
        <input type="password" id="psw_reapeat" placeholder="Repitir Senha" name="psw_repeat" required />
        <hr />
        <button type="submit" class="registerbtn">Registrar</button>
    </div>

    <div class="container signin">
        <p>Você ja tem uma conta ? <a href="/">Acessar</a>.</p>
    </div>
</form>
