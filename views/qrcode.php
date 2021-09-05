<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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
</style>
</head>
<body>

<div class="navbar">
  <a href="painel.php">Pagina Inicial</a>
  <a href="relatorio.php">Relatórios</a>
  <div class="subnav">
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

<form>
      <fieldset>
        <input type="text" id="texto" placeholder="Texto" />
        <select id="nivel">
          <option value="L">Nível redundância L</option>
          <option value="M">Nível redundância M</option>
          <option value="Q">Nível redundância Q</option>
          <option value="H">Nível redundância H</option>
        </select>
        <select id="pixels">
          <option value="4">quadradinho de 4px</option>
          <option value="8">quadradinho de 8px</option>
          <option value="10">quadradinho de 10px</option>
          <option value="16">quadradinho de 16px</option>
        </select>
        <label>
          <input type="radio" name="img" value="J" />
          JPEG
        </label>
        <label>
          <input type="radio" name="img" value="P" checked="checked" />
          PNG
        </label>
        <br />
        <button type="button" id="botao">Gerar QR Code</button>
      </fieldset>
    </form>
    
    <?php
      $aux = 'qr_img0.50j/php/qr_img.php?';
      $aux .= 'd=Criando QrCode no PHP&';
      $aux .= 'e=H&';
      $aux .= 's=10&';
      $aux .= 't=J';
    ?>
    <div style="float: left; border: 1px solid #000;">
      <img src="<?php echo $aux; ?>" />
    </div>
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript">
      $('#botao').click(function(e){
        e.preventDefault();
        var texto = $('#texto').val();
        var nivel = $('#nivel').val();
        var pixels = $('#pixels').val();
        var tipo = $('input[name="img"]:checked').val();
        
        if(texto.length == 0){
          alert('Informe um texto');
          return(false);
        }
        alert('qr_img0.50j/php/qr_img.php?d='+texto+'&e='+nivel+'&s='+pixels+'&t='+tipo);
        $('img').attr('src', 'qr_img0.50j/php/qr_img.php?d='+texto+'&e='+nivel+'&s='+pixels+'&t='+tipo);
      });
    </script>

</body>
</html>
