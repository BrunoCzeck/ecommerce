<?php
/* Smarty version 3.1.40, created on 2021-12-17 19:47:37
  from 'C:\xampp\htdocs\ecommerce\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61bcdb499994a2_72693327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb548c8b7d922434678fac2d874c60e9e0bb1ec5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\view\\produtos_info.tpl',
      1 => 1639766856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bcdb499994a2_72693327 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 style="font-size: 15px;">Pagina das Informações do Produto!</h1>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
    
    <div class="col-md-6">
       <img class="thumbnail" src=<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
 alt="" width = "200" height = "200">
    </div>



    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
