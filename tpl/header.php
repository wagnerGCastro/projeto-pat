<?php
session_start();
?>

<!DOCTYPE html>
<html>   
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <?php
            switch (getPageName( BASE )) {
                case '':
                    echo '<link rel="stylesheet" type="text/css" href="'.BASE.'/assets/css/login.css" />';
                    break;
                case 'pag_cad_user':
                    echo '<link rel="stylesheet" type="text/css" href="'.BASE.'/assets/css/pag_cad_user.css" />';
                    break;
                case 'pag_cad_cc':
                    echo '<link rel="stylesheet" type="text/css" href="'.BASE.'/assets/css/pag_cad_cc.css" />';
                    break;
                case 'pag_sucesso':
                    echo '<link rel="stylesheet" type="text/css" href="'.BASE.'/assets/css/pag_sucesso.css" />';
                    break;
            }
        ?>
    </head>
<body>
