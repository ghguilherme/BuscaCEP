<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->get('/cep/{cep:[0-9]{8}}', 'CepController@BuscaPorCep');
    $router->get('/endereco/{uf:[A-Za-z]{2}}/{municipio}/{logradouro}', 'CepController@BuscaPorEndereco');
});
