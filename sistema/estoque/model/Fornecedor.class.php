<?php
	class Fornecedor
	{
			
		function __construct(
            private int $idfornecedor = 0, 
            private string $nome = "",
            private string $telefone = "", 
            private string $produto = "" ,
            $logradouro = "", $cidade = "",  $cep = "")
		{
			$this->endereco[] = new Endereco($logradouro, $cidade, $cep);
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

		public function setEndereco($lougradouro, $cidade, $cep)
		{
			$this->endereco[] = new Endereco($lougradouro,  $cidade, $cep,);

		}
		
	}
?>