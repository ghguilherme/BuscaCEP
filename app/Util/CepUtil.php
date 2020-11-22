<?php

namespace App\Util;

class CepUtil
{
    public function __construct()
    {
    }

    public function BuscaPorCep($cep)
    {
        switch (getenv('API_BUSCA_CEP')) {
            case 'VIACEP':
                return $this->buscaViaCepPeloCep($cep);
                break;

            default:
                abort(500, "API not defined.");
                break;
        }
    }

    public function BuscaPorEndereco($uf, $municipio, $endereco)
    {
        switch (getenv('API_BUSCA_CEP')) {
            case 'VIACEP':
                return $this->buscaViaCepPeloLogradouro($uf, $municipio, $endereco);
                break;

            default:
                abort(500, "API not defined.");
                break;
        }
    }

    private function buscaViaCepPeloCep($cep)
    {
        $client        = new \GuzzleHttp\Client();
        $response      = $client->get('https://viacep.com.br/ws/' . $cep . '/json/');
        $arrayResponse = json_decode($response->getBody()->getContents(), true);
        return $this->prepareReturnData($arrayResponse);
    }

    private function buscaViaCepPeloLogradouro($uf, $municipio, $endereco)
    {
        $client        = new \GuzzleHttp\Client();
        $response      = $client->get('https://viacep.com.br/ws/' . $uf . '/' . $municipio . '/' . $endereco . '/json/');
        $arrayResponse = json_decode($response->getBody()->getContents(), true);
        return $this->prepareReturnData($arrayResponse);
    }

    private function prepareReturnData($data)
    {
        $arrayToReturn = [
            'type' => 'sucess',
            'data' => []
        ];

        // See if it is not multidimensional, for returning equal in both ways
        if (count($data) == count($data, COUNT_RECURSIVE)) {
            $arrayToReturn['data'][] = $data;
        } else {
            $arrayToReturn['data'] = $data;
        }

        return $arrayToReturn;
    }
}
