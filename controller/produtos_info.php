<?php 
$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutosID(Rotas::$pag[1]);

$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('TEMA', Rotas::get_SiteTema());

$smarty->display('produtos_info.tpl');

/*  
echo '<pre>';
var_dump($produtos->GetItens());
echo '</pre>'; 
 */


?>