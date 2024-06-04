<?php
    require_once "../model/Fornecedor.class.php";
    require_once "../model/Endereco.class.php";

    $fornecedor = new Fornecedor("Sergio Vieira","(14)988235689","Caneta bic","Rua das Flores", "24", 
    "Vila Pavão", "17.500-024", "Barra Bonita","SP" );

    echo "<pre>";
    var_dump($fornecedor);
    echo "</pre>";


?>