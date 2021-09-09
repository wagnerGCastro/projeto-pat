<?php include_once("config/config.php") ; ?>
<?php include_once("helpers/functions.php") ; ?>

<?php include_once("tpl/header.php") ; ?>

<!-- Page Container -->
<main class="container">    
	<?php 

        /********************************************
        FUNÇÃO DO PRO PHP FAZ A NAVEGAÇÃO AMIGÁVEL
        ********************************************/

		$url = htmlentities(strip_tags($_GET));
		$url = explode('/', $url);
		$url[0] = ($url[0] == NULL ? 'index' : $url[0]);

		if(file_exists('views/'.$url[0].'.php')){
            require_once('views/'.$url[0].'.php');
		}elseif(file_exists('views/'.$url[0].'/'.$url[1].'.php')){
            require_once('views/'.$url[0].'/'.$url[1].'.php');
		}else{
            require_once('views/404.php');
		}
	?>
</main><!-- End Page Container -->

<?php include_once("tpl/footer.php") ; ?>
