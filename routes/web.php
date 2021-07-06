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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/home', function() {
    return view ('livros.home');
})-> name('livros.home');

Route::get('/create', function() {
    return view ('livros.create');
})-> name('livros.create');

Route::get('/success', function() {
    return view ('livros.success');
})-> name('livros.success');

Route::get('/livro/novo', 'LivrosController@create');
Route::post('/livro/novo', 'LivrosController@store')->name('salvar_livro');