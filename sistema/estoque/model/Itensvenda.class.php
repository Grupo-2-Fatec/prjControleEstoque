<?php
	class Itensvenda
	{
		public function __construct(private int $iditens = 0, private int $quantidade = 0, private float $valor_unitario = 0.00, private float $valor_total, private $produto = null){}
		
		public function getIditens()
		{
			return $this->iditens;
		}
		public function getQuantidade()
		{
			return $this->quantidade;
		}
		public function getValor_unitario()
		{
			return $this->valor_unitario;
		}
        public function getValor_total()
        {
            return $this->valor_total;
        }		
		public function getProduto()
		{
			return $this->produto;
		}
	}
?>