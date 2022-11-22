<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoticiaController;

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

Route::get('noticia',[NoticiaController::class, 'index']);
Route::post('cadastrarnoticias',[NoticiaController::class, 'store']);
Route::get('vernoticias/{id}',[NoticiaController::class, 'show']);


