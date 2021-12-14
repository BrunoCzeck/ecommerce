<?php 

class Conexao extends Config {
	private $host, $user, $senha, $banco; 

	function __construct(){
		$this->host = self::BD_HOST;
		$this->user = self::BD_USER;
		$this->senha = self::BD_SENHA;
		$this->banco = self::BD_BANCO;
		$this->prefixo = self::BD_PREFIX;
	
	}

	try {
		if(this->Conectar() == null){
			$this->Conectar();
		}

	} catch (Exception $e) {

		exit($e->getMessage() . '<h2> Erro Ao Conectar com o banco de dados! </h2>'));
	}
}
	
	private function Conectar(){
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf-8", // Codificação o banco para UTF-8 caso não esteja setado para utf8
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING // Alerta 
		);
		$link = new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->user, $this->senha);
	}
}



?>