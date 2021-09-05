
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <?php 
            switch (getPageName( BASE )) {
                case 'pag_cad_user':
                    echo '<script type="text/javascript" src="'.BASE.'/assets/js/pag_cad_user.js"></script>';
                    break;
                case 'pag_cad_cc':
                    // echo '<script type="text/javascript" src="'.BASE.'/assets/js/pag_cad_cc.js"></script>';
                    break;
                case 'pag_sucesso':
                    // echo '<script type="text/javascript" src="'.BASE.'/assets/js/pag_sucesso.js"></script>';
                    break;
            }
        ?>
    </body>
</html>
