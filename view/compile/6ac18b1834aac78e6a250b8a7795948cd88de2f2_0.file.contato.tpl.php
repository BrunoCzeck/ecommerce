<?php
/* Smarty version 3.1.40, created on 2021-12-13 19:36:16
  from 'C:\xampp\htdocs\ecommerce\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b792a07b4667_45690961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ac18b1834aac78e6a250b8a7795948cd88de2f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\view\\contato.tpl',
      1 => 1639420575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b792a07b4667_45690961 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-12">
                        <div class="contact-form">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div><button class="btn" type="submit">Send Message</button></div>
                            </form>
                        </div><?php }
}
