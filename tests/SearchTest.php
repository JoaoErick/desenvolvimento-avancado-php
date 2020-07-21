<?php

use PHPUnit\Framework\TestCase;
use Aline\PhpAvancado\Search;

class SearchTest extends TestCase {

    public function testgetAddressFromZipcode(){
        $resultado = new Search();
        $resultado = $resultado->getAddressFromZipcode("49700000");

        $esperado = [
            "cep" => "48700-000",
            "logradouro" => "",
            "complemento" => "",
            "bairro" => "",
            "localidade" => "Serrinha", 
            "uf" => "BA", 
            "unidade" => "",
            "ibge" => "2930501",   
            "gia" => ""
        ];

        $this->assertEquals($esperado, $resultado);
    }
}