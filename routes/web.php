<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/login', "Auth\LoginController@index")->name('login');
Route::post('/login', "Auth\LoginController@authenticate");

Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('todo', 'TodoController');

/*
GET     - /todo             - index         - todo.index    - LISTA TODOS OS ITENS
GET     - /todo/{create}    - create        - todo.create   - FORM DE CRIAÇÃO
POST    - /todo             - store         - todo.store    - RECEBER OS DADOS E ADD ITEM
GET     - /todo/{id}        - show          - todo.show     - ITEM INDIVIDUAL
GET     - /todo/{id}/edit   - edit          - todo.edit     - FORM DE EDIÇÃO
PUT     - /todo/{id}        - update        - todo.update   - RECEBER OS DADOS E UPDATE ITEM
DELETE  - /todo/{id}        - destroy       - todo.destroy  - DELETE O ITEM
*/

Route::prefix('/tarefas')->group(function () {

    Route::get('/', 'TarefasController@index')->name('tarefas.index')->middleware('auth'); // Listagem de Tarefas

    Route::get('/add', 'TarefasController@add'); // tela de adicão de novas tarefas
    Route::post('/add', 'TarefasController@addAction'); // Ação de adição

    Route::get('/edit/{id}', 'TarefasController@edit'); // Tela de Edição
    Route::post('/edit/{id}', 'TarefasController@editAction'); //  Ação de edição

    Route::get('/delete/{id}', 'TarefasController@delete'); // Ação de deletar

    Route::get('/marcar/{id}', 'TarefasController@resolved'); // Marcar resolvido ou não

});
