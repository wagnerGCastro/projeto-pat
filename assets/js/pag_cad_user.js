$(document).ready(function() {

    $('form[name="cad_user_banco"]').submit(function(event) {
        event.preventDefault();
        var name = document.cad_user_banco.name.value;
        var senha1 = document.cad_user_banco.psw.value;
        var senha2 = document.cad_user_banco.psw_repeat.value;

        if (senha1 !== senha2) {
            alert("SENHAS DIFERENTES");
        } else {
            // $(location).attr('href', 'cadastrar_banco');

            var dados = 'name=' + name + '&password=' + senha1;

            $.ajax({
                url: "controllers/cad_user_banco.php",
                type: 'POST',
                data: dados,
                dataType: '',
                beforeSend: function() { console.log('eviando....') },
                error: function(error) {
                    console.log('error', error)
                },
                success: function(dados) {
                    console.log('dados', dados)
                },
                complete: function() {}
            });
        }
    });
});
