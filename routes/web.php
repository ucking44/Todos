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
    return view('welcome');
});

Route::get('/new', 'PagesController@new');

Route::get('/todos', 'TodosController@index')->name('todos');

Route::get('/todo/delete/{id}', 'TodosController@delete')->name('todo.delete');

Route::get('/todo/update/{id}', 'TodosController@update')->name('todo.update');

Route::post('/todo/save/{id}', 'TodosController@save')->name('todos.save');

Route::post('/create/todo', 'TodosController@store');

Route::get('/todos/completed/{id}', 'TodosController@completed')->name('todos.completed');

