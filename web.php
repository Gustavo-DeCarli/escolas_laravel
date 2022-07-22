<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscolaController;

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

Route::get('/escolas', [EscolaController::class, 'index']);
Route::get('/escolas/{id}/cursoshow', [EscolaController::class, 'showcurso'])->where('id','[0-9]+');
Route::get('/escolas/cursocreate', [EscolaController::class, 'createcurso']);
Route::post('/escolas/cursostore', [EscolaController::class, 'storecurso']);
Route::get('/escolas/{id}/cursoedit', [EscolaController::class, 'editcurso']);
Route::post('/escolas/cursoupdate', [EscolaController::class, 'updatecurso']);
Route::get('/escolas/{id}/cursodestroy', [EscolaController::class, 'destroycurso']);
