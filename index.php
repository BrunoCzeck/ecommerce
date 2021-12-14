<?php

require './lib/autoload.php';

    $smarty = new Template();
            

    $smarty->assign('GET_TEMA', Rotas::get_SiteTema());
    $smarty->assign('GET_HOME', Rotas::get_SiteHome());
    $smarty->assign('GET_CARRINHO', Rotas::get_Carrinho());
    $smarty->assign('GET_CONTATO', Rotas::get_Contato());
    $smarty->assign('GET_PRODUTO', Rotas::get_Produto());
    
    $dados = new Conexao();
    //var_dump($dados);

    $smarty->display('index.tpl');
    
?>