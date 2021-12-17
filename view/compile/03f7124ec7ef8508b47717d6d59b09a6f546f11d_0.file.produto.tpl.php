<?php
/* Smarty version 3.1.40, created on 2021-12-17 18:16:56
  from 'C:\xampp\htdocs\ecommerce\view\produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61bcc60864cf85_40349889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03f7124ec7ef8508b47717d6d59b09a6f546f11d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\view\\produto.tpl',
      1 => 1639761388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bcc60864cf85_40349889 (Smarty_Internal_Template $_smarty_tpl) {
?><h2> Pagina de Produtos </h2>

			<ul style="list-style:none">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
		<div style="position: relative; display: flex; padding: 0 2em; justify-content: space-between;">
			<li>	
					<a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">
						<img src="view/img/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="" width="200" height="200">
							<h4 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </h4>
							<h3 class="text-center text-danger">Valor $<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>
					</a>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</li>
			</ul>
		</div>
	</section>


<?php }
}
