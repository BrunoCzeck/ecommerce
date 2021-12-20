<?php
/* Smarty version 3.1.40, created on 2021-12-20 16:03:11
  from 'C:\xampp\htdocs\ecommerce\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61c09b2f036745_55462865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb548c8b7d922434678fac2d874c60e9e0bb1ec5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\view\\produtos_info.tpl',
      1 => 1640012573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c09b2f036745_55462865 (Smarty_Internal_Template $_smarty_tpl) {
?>   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
    
    <div class="col-md-6">
       <img class="thumbnail" src=<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
 alt="" width = "200" height = "200">
    </div>
   <div>
      <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/img/payment-method.png">
      <h4 class="text-center" style="margin-top: 10px;"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </h4>
      <h3 class="text-center">Valor $<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
,00</h3>
   </div>
      <section>
         <article>
            <h2 style="font-size: 15px; margin-top: 10px;" class="text-center">Descrição do Produto</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</p>
         </article>
      </section>
      <button style="width: 100px; height: 50px; border-radius: 5px; background:#7CFC00;" type="submit">Comprar</button>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
