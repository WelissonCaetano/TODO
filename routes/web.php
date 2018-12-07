<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/projetos', 'ControladorProjeto@index');
Route::get('/projetos/novo', 'ControladorProjeto@create');
Route::post('/projetos', 'ControladorProjeto@store');
Route::get('/projetos/apagar/{id}', 'ControladorProjeto@destroy');
Route::get('/projetos/editar/{id}', 'ControladorProjeto@edit');
Route::get('/projetos/tarefas/{id}', 'ControladorProjeto@task');
Route::post('/projetos/{id}', 'ControladorProjeto@update');