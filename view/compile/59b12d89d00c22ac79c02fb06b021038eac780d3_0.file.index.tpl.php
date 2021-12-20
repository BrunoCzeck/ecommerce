<?php
/* Smarty version 3.1.40, created on 2021-12-20 20:59:37
  from 'C:\xampp\htdocs\ecommerce\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61c0e0a9973c87_30412641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59b12d89d00c22ac79c02fb06b021038eac780d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\view\\index.tpl',
      1 => 1640030372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0e0a9973c87_30412641 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="utf-8">
        <title> eCommerce PHP 7</title>

        <!-- Favicon -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/lib/slick/slick.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/logo2.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_CARRINHO']->value;?>
" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="nav-item nav-link active">Home</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_PRODUTO']->value;?>
" class="nav-item nav-link">Produtos</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_CARRINHO']->value;?>
" class="nav-item nav-link">Carrinho</a>
                            <a href="my-account.html" class="nav-item nav-link">Minha Conta</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Mais Paginas</a>
                                <div class="dropdown-menu">
                                    <a href="login.html" class="dropdown-item">Login e Registro</a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['GET_CONTATO']->value;?>
" class="dropdown-item">Contato</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Entrar</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Login</a>
                                    <a href="#" class="dropdown-item">Registro</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>


       <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <?php 
                    Rotas::get_Pagina();
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Contatos</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Loja Geek Store Cwb, Curitiba, Brasil</p>
                                <p><i class="fa fa-envelope"></i>brunoczecktvm@gmail.com</p>
                                <p><i class="fa fa-phone"></i>41 9999-9999</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Redes Sociais</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <div class="footer-widget">
                            <h2>Informações</h2>
                            <ul>
                                <li><a href="#">Sobre nós</a></li>
                                <li><a href="#">Politica de Privacidade</a></li>
                                <li><a href="#">Termos e Condições</a></li>
                            </ul>
                        </div>
                    </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>Formas de Pagamento:</h2>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy;<a href="#">Bruno Czeck</a></p>
                    </div>
                </div>
            </div>
        </div>

        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/lib/easing/easing.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/lib/slick/slick.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
