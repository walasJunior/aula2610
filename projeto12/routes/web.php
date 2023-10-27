<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PrincipalController@principal') ->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@SobreNos') ->name('site.SobreNos');
Route::get('/contato', 'ContatoController@contato') ->name('site.contato');
Route::get('/login', function () {return 'Login' ;}) ->name('site.login');

route::prefix('/app')->group(function(){
route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
route::get('/fornecedores', function(){return 'Fornecedores';})->name('app.fornecedores');
route::get('/produtos', function(){return 'produtos';})->name('app.produtos');

});

route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui </a> para ir para pagina inicial';

});