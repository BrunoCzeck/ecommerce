<?php

require './lib/autoload.php';

    $smarty = new Template();
    Rotas::get_pagina();
    $smarty->display('index.tpl');
    $smarty->assign('GET_TEMA', Rotas::get_SiteTema());
    echo Rotas::get_Carrinho();
    
?>