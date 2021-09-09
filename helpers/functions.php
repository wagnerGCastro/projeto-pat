<?php


// FUNÇÃO DO PRO PHP FAZ A NAVEGAÇÃO AMIGÁVEL
function getPageName( $base ) {
    $URL_ATUAL= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $URL_ATUAL = str_replace($base, "", $URL_ATUAL);
    $URL_ATUAL = str_replace('/', "", $URL_ATUAL);
    return $URL_ATUAL;
}

// Seta o títutlo da página
function setTitle( $titlePage ) {
    return $titlePage;
}

