<?php 
    class Pedido
    {
        public function __construct(private int $idpedido = 0, private string $data = "", private string $hora = ""){}

        public function getIdpedido()
        {
            return $this->idpedido;
        }
        public function getData()
        {
            return $this->data;
        }
        public function getHora()
        {
            return $this->hora;
        }

        
    }



?>