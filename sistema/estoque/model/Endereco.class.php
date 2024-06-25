<?php
	class Endereco
	{
		
		function __construct(
			private int $idendereco = 0, 
            private string $logradouro = "", 
			private string $cidade = "", 
            private string $cep = "",
			private $fornecedor = null)
        {}
		
		function getIdEndereco()
		{
			return $this->idendereco;
		}
		function getLogradouro()
		{
			return $this->logradouro;
		}
		function getCidade()
		{
			return $this->cidade;
		}
		function getCep()
		{
			return $this->cep;
		}
		public function getFornecedor()
		{
			return $this->fornecedor;
		}
       
		
		
		function setLogradouro($logradouro)
		{
			$this->logradouro = $logradouro;
		}
		function setCidade($cidade)
		{
			$this->cidade = $cidade;
		}        
		function setCep($cep)
		{
			$this->cep = $cep;
		}
		public function setFornecedor($fornecedor)
		{
			$this->fornecedor = $fornecedor ;
		}
        
		
	}
?>