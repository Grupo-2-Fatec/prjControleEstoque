<?php
	class Itenscompra
	{
		public function __construct(private int $iditens = 0, private int $quantidade = 0, private $produto = null){}
		
		public function getIditens()
		{
			return $this->iditens;
		}
		public function getQuantidade()
		{
			return $this->quantidade;
		}
		public function getProduto()
		{
			return $this->produto;
		}
	}
?>