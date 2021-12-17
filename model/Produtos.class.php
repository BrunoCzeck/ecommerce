<?php 

class Produtos extends Conexao{ 
	function __construct(){
		parent::__construct();
	}
//------------- Pega todos os produtos --------------------//
	
	function GetProdutos(){
		// query p buscar produtos de uma categoria especifica. 

		$sql = "SELECT * FROM {$this->prefixo}produtos p INNER JOIN {$this->prefixo}categorias c ON p.pro_categoria = c.cat_id";
	
		// Caso eu queira colocar ordenação descomento a query abaixo.  

		//$sql .= " ORDER BY pro_id DESC"; 

		$this->ExecuteSQL($sql);

		$this->GetLista();

	}
   				
//------------- Pega o ID do produto ------------------ // 
	function GetProdutosID($id){
		
		$sql = "SELECT * FROM {$this->prefixo}produtos p INNER JOIN {$this->prefixo}categorias c ON p.pro_categoria = c.cat_id";
	
		$sql .= " AND pro_id = {$id}";

		$this->ExecuteSQL($sql);

		$this->GetLista();

	}


	private function GetLista(){
		$i = 1; 
		while($lista = $this->ListarDados()):
		$this->itens[$i] = array(
			'pro_id'		  => $lista['pro_id'],
			'pro_categoria'   => $lista['pro_categoria'],
			'pro_nome'	      => $lista['pro_nome'],
			'pro_desc'        => $lista['pro_desc'],
			'pro_peso'        => $lista['pro_peso'],
			'pro_valor'       => $lista['pro_valor'],
			'pro_altura' 	  => $lista['pro_altura'],
			'pro_largura'     => $lista['pro_largura'],
			'pro_comprimento' => $lista['pro_comprimento'],
			'pro_img' 		  => $lista['pro_img'],
			'pro_slug' 		  => $lista['pro_slug'],
			'pro_estoque' 	  => $lista['pro_estoque'],
			'pro_modelo' 	  => $lista['pro_modelo'],
			'pro_ref' 		  => $lista['pro_ref'],
			'pro_fabricante'  => $lista['pro_fabricante'],
			'pro_ativo' 	  => $lista['pro_ativo'],
			'pro_frete' 	  => $lista['pro_frete'],
			'cat_nome'		  => $lista['cat_nome'],
			'cat_slug'		  => $lista['cat_slug'],
			'cat_id'		  => $lista['cat_id']

		);

		$i++;
		endwhile;
	}
}



?>