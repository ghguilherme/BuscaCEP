<?php

class CepTest extends TestCase
{
    /**
     * Get by CEP
     *
     * @return void
     */
    public function testGetByCEP()
    {
        $this->get('/v1/cep/21932080')
        ->seeJsonEquals([
            "type" => "sucess",
            "data" => [
                [
                    "cep" => "21932-080",
                    "logradouro" => "Beco Brasil",
                    "complemento" => "",
                    "bairro" => "Nossa Senhora das Graças",
                    "localidade" => "Rio de Janeiro",
                    "uf" => "RJ",
                    "ibge" => "3304557",
                    "gia" => "",
                    "ddd" => "21",
                    "siafi" => "6001"
                ]
            ]
        ]);
    }

    /**
     * Get by Addess
     *
     * @return void
     */
    public function testGetByAddress()
    {
        $this->get('/v1/endereco/RJ/Rio de Janeiro/Janio')
        ->seeJsonEquals([
            "type" => "sucess",
            "data" => [
                [
                    "cep" => "20970-152",
                    "logradouro" => "Vila Jânio Quadros",
                    "complemento" => "",
                    "bairro" => "Jacaré",
                    "localidade" => "Rio de Janeiro",
                    "uf" => "RJ",
                    "ibge" => "3304557",
                    "gia" => "",
                    "ddd" => "21",
                    "siafi" => "6001"
                ]
            ]
        ]);
    }
}
