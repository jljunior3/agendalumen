<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//$app->get('/', function () use ($app) {
//    return "<h1>Bem vindo ao Lumen !</h1>";
//});

$app->get('/contato/novo', ['as' => 'pessoa.create', 'uses' => 'PessoaController@create']);
$app->post('/contato', ['as' => 'pessoa.store', 'uses' => 'PessoaController@store']);

$app->get('/', ['as' => 'agenda.index', 'uses' => 'IndexController@index']);
$app->get('/{letra}', ['as' => 'agenda.letra', 'uses' => 'IndexController@index']);
$app->post('/busca', ['as' => 'agenda.busca', 'uses' => 'IndexController@busca']);

$app->get('/contato/{id}/apagar', ['as' => 'pessoa.delete', 'uses' => 'PessoaController@delete']);
$app->delete('/contato/{id}', ['as' => 'pessoa.destroy', 'uses' => 'PessoaController@destroy']);


$app->get('/telefone/{id}/apagar', ['as' => 'telefone.delete', 'uses' => 'TelefoneController@delete']);
$app->delete('/telefone/{id}', ['as' => 'telefone.destroy', 'uses' => 'TelefoneController@destroy']);