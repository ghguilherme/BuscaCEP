<?php

namespace App\Http\Controllers;

use App\Util\CepUtil;

class CepController extends Controller
{
    public function __construct()
    {
    }
    public function BuscaPorCep($cep)
    {
        $cepUtil = new CepUtil();
        return response()->json($cepUtil->BuscaPorCep($cep));
    }

    public function BuscaPorEndereco($uf, $municipio, $logradouro)
    {
        $cepUtil = new CepUtil();
        return response()->json($cepUtil->BuscaPorEndereco($uf, $municipio, $logradouro));
    }
}
