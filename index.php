<?php

require './lib/autoload.php';

    $smarty = new Template();
    Rotas::get_pagina();
    $smarty->display('index.tpl');

    echo Rotas::get_SiteRaiz();
    
?>