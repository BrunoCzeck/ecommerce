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
	private function Conectar(){
		$link = new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->user, $this->senha);
	}
}



?>