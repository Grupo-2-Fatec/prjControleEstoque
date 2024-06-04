<?php
	class fornecedor
	{
			
		function __construct(
            private int $idfornecedor = 0, 
            private string $nome = "",
            private string $telefone = "", 
            private string $produto = "" ,
            $lougradouro, $numero, $bairro, $cep, $cidade, $uf)
		{
			$this->endereco[] = new Endereco($lougradouro, $numero, $bairro, $cep, $cidade, $uf);
		}
 		
        public function getIdFornecedor()
		{
			return $this->idfornecedor;
		}

 		function getNome()
 		{
 			return $this->nome;
 		}

        function getTelefone()
 		{
 			return $this->telefone;
 		}
        function getProduto()
 		{
 			return $this->produto;
 		}
		public function getEndereco()
		{
			return $this->endereco;
		}
		
 		function setNome($nome)
 		{
 			$this->nome = $nome;
 		}

        function setTelefone($telefone)
 		{
 			$this->telefone = $telefone;
 		}

         function setProduto($produto)
 		{
 			$this->produto = $produto;
 		}

		public function setEndereco($lougradouro, $numero, $bairro, $cep, $cidade, $uf)
		{
			$this->endereco[] = new Endereco($lougradouro, $numero, $bairro, $cep, $cidade, $uf);

		}
		
	}
?>