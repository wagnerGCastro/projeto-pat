$(document).ready(function() {

    $('form[name="login"]').submit(function() {

        validarSenha()

        // window.setTimeout( function(){
        //     $(location).attr('href','dashboard.php');	
        // }, 1000 );
        return false;
    });


});

function validarSenha() {
    senha1 = document.Cadastro.psw.value;
    senha2 = document.Cadastro.psw_repeat.value;

    if (senha1 == senha2) alert("SENHAS IGUAIS");
    else alert("SENHAS DIFERENTES");
}