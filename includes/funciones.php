<?php
define('CARPETA_IMAGENES',$_SERVER['DOCUMENT_ROOT']. '/imagenes/');

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function isAuth():void{
    if(!$_SESSION['login']){
        header('Location:/');
    }
}