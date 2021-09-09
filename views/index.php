<?php 
    session_start(); 
?>

<!--Seta o titulo da Pagina-->
<script>
    document.title = 'Login';
</script>

<!-- Autenticar no banco -->
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

<!-- Div do form de login-->
<div class="conteiner">
    <h3 class="text">Faça seu Login</h3>
    <div class="box">
        <form class="Form" action="login.php" method="POST">
            <input type="text" name="Name" placeholder="Nome do Usuário" /><br />
            <br />
            <input type="password" name="Psw" placeholder="Senha" /><br />
            <br />
            <button type="submit">Entrar</button>
        </form>
    </div>
    <a class="link" href="pag_cad_user" target="_blank"> Cadastrar-se</a>
</div>
