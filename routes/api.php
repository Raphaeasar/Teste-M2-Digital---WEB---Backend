<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\CampanhasController;
use App\Http\Controllers\DescontoController;
use App\Http\Controllers\ProdutoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 1° - Cadastrar/Editar/Listar/Excluir cidades;
// List cidade
Route::get('cidades', [CidadeController::class, 'index']);

// List single cidade
Route::get('cidades/{id}', [CidadeController::class, 'show']);

// Create new cidade
Route::post('cidades', [CidadeController::class, 'store']);

// Update cidade
Route::put('cidades/{id}', [CidadeController::class, 'update']);

// Delete cidade
Route::delete('cidades/{id}', [CidadeController::class,'destroy']);

/////////////////////////////////////////////////////////////////////
// 2° - Cadastrar/Editar/Listar/Excluir grupo de cidades;
// List grupo
Route::get('grupo', [GrupoController::class, 'index']);

// List single grupo
Route::get('grupo/{id}', [GrupoController::class, 'show']);

// Create new grupo
Route::post('grupo', [GrupoController::class, 'store']);

// Update grupo
Route::put('grupo/{id}', [GrupoController::class, 'update']);

// Delete grupo
Route::delete('grupo/{id}', [GrupoController::class,'destroy']);

/////////////////////////////////////////////////////////////////////
// 3° - Cadastrar/Editar/Listar/Excluir campanhas para o grupo de cidades onde cada grupo possui somente uma campanha ativa;
// List campanhas
Route::get('campanhas', [CampanhasController::class, 'index']);

// List single campanhas
Route::get('campanhas/{id}', [CampanhasController::class, 'show']);

// Create new campanhas
Route::post('campanhas', [CampanhasController::class, 'store']);

// Update campanhas
Route::put('campanhas/{id}', [CampanhasController::class, 'update']);

// Delete campanhas
Route::delete('campanhas/{id}', [CampanhasController::class,'destroy']);

/////////////////////////////////////////////////////////////////////
// 4° - Cadastrar/Editar/Listar/Excluir desconto para os produtos da campanha;
// List desconto
Route::get('desconto', [DescontoController::class, 'index']);

// List single desconto
Route::get('desconto/{id}', [DescontoController::class, 'show']);

// Create new desconto
Route::post('desconto', [DescontoController::class, 'store']);

// Update desconto
Route::put('desconto/{id}', [DescontoController::class, 'update']);

// Delete desconto
Route::delete('desconto/{id}', [DescontoController::class,'destroy']);

/////////////////////////////////////////////////////////////////////
// 5° - Cadastrar/Editar/Listar/Excluir desconto para os produtos da campanha;
// List produto
Route::get('produto', [ProdutoController::class, 'index']);

// List single produto
Route::get('produto/{id}', [ProdutoController::class, 'show']);

// Create new produto
Route::post('produto', [ProdutoController::class, 'store']);

// Update produto
Route::put('produto/{id}', [ProdutoController::class, 'update']);

// Delete produto
Route::delete('produto/{id}', [ProdutoController::class,'destroy']);




