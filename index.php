<?php
session_start();
?>
<!DOCTYPE html>
<html>   
<head>
    <title>Login</title>
<style>
 body {
    margin: 0px;
    background: url(bck_initial.jpg) no-repeat center top fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  input[type=text], input[type=password] {
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  h3{
    color: white;
  }
  .conteiner{
  padding: 200px 0;
  border: 1px solid black;
  text-align: center;;
  }

  button {
  background-color: #white;
  border: none;
  text-decoration-color: black;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

}
  .p{
    color: white;
   }
  a{
    color:white;
  }
</style>
</head> 
<body>
  <!-- Autenticar no banco -->
     <?php
          if(isset($_SESSION['nao_autenticado'])):
          ?>
     <div class="notification is-danger">
          <p>ERRO: Usuário ou senha inválidos.</p>
          </div>
     <?php
          endif;
          unset($_SESSION['nao_autenticado']);
          ?>

          <!-- Div do form de login--> 
  <div class="conteiner">
    <h3 class="text">Faça seu Login</h3>
    <div class="box">
      <form class="Form" action="login.php" method="POST">
               <input type="text" name="Name" placeholder="Nome do Usuário"><br><br>
               <input type="password" name="Psw" placeholder="Senha"><br><br>
                <button type="submit" >Entrar</button>
          </form>
        </div>
       <div>
  </div>
  <a class="link" href="pag_cad_user.php" target="_blank"> Cadastrar-se</a>
 </div>
</body>

</html>