<?php
	class Produto
	{
		public function __construct(
			private int $idproduto = 0, 
			private string $nome = "", 
			private string $categoria = "", 
			private int $quantidade = 0, 
			private string $marca = "", 
			private float $preco = 0.00,
            private $fornecedor = null 
		){}
		
		public function getIdproduto()
		{
			return $this->idproduto;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
		
		public function getCategoria()
		{
			return $this->categoria;
		}
		
		public function getQuantidade()
		{
			return $this->quantidade;
		}
		
		public function getMarca()
		{
			return $this->marca;
		}
		
		public function getPreco()
		{
			return $this->preco;
		}
		
		public function getFornecedor()
		{
			return $this->fornecedor;
		}
	}
?>
