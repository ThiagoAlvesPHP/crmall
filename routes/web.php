<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::redirect('/', 'clientes/listar');
//grupo de rotas clientes
Route::prefix('/clientes')->group(function(){
	//pagina de lista de clientes
	Route::get('/listar', [HomeController::class, 'list'])->name('list');
	//deletar cliente
	Route::get('/delete/{id}', [HomeController::class, 'delete']);
	//rota de adicionar cliente
	Route::get('/adicionar', [HomeController::class, 'add'])->name('add');
	//adicionar cliente
	Route::post('/addAction', [HomeController::class, 'addAction'])->name('addAction');
	//rota editar 
	Route::get('/editar/{id}', [HomeController::class, 'edit'])->name('edit');
	//adicionar cliente
	Route::post('/editAction/{id}', [HomeController::class, 'editAction'])->name('editAction');
});

Route::fallback(function(){
	return view('404');
});














//rota de listar clientes
	// Route::get('/', function(){
	// 	$dados = array();
	// 	$dados['link_add'] = route('add');

	// 	return view('home', $dados);
	// });