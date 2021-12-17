<?php

class Rotas{

    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';

    static function get_SiteHome(){
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }

    static function get_SiteRaiz(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }

    static function get_SiteTema(){
        return self::get_SiteHome() . '/' . self::$pasta_view;
    }
    
    static function get_Carrinho(){
        return self::get_SiteHome() . '/carrinho';
    }
    
    static function get_Contato(){
        return self::get_SiteHome() . '/contato';
    }

    static function get_Produto(){
        return self::get_SiteHome() . '/produtos';
    }

    static function get_ProdutosInfo(){
        return self::get_SiteHome() . '/produtos_info';
    }

    static function get_ImgPasta(){
        return 'view/img/';
    }

    static function get_ImgURL(){
        return self::get_SiteHome() . '/' . self::get_ImgPasta();
    }
    

    static function get_pagina(){
        if(isset($_GET['pag'])){
            $pagina = $_GET['pag'];
            self::$pag = explode('/', $pagina); 
            
            $pagina = 'controller/'. self::$pag[0] . '.' . 'php';
           // $pagina = 'controller/'.$_GET['pag'] . '.' . 'php';
            if(file_exists($pagina)){
                include $pagina;
            }else{
                include 'erro.php';
            }
        }
    }
}

?>  