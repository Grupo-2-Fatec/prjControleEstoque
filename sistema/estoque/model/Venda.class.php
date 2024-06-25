<?php
    class Venda
    {
        public function __construct(private int $idvenda = 0, private string $item = "", private string $cliente = "", private int $quantidade = 0){}
         
        public function getIdvenda()
        {
            return $this->idvenda;
        }
        public function getItem()
        {
            return $this->item;
        }
        public function getCliente()
        {
            return $this->cliente;
        }
        public function getQuantidade()
        {
            return $this->quantidade;
        }

    } 

?>