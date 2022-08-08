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

Route::get('/escolas/{id}/formularioshow', [EscolaController::class, 'showformulario'])->where('id','[0-9]+');
Route::get('/escolas/formulariocreate', [EscolaController::class, 'createformulario']);
Route::post('/escolas/formulariostore', [EscolaController::class, 'storeformulario']);
Route::get('/escolas/{id}/formularioedit', [EscolaController::class, 'editformulario']);
Route::post('/escolas/formularioupdate', [EscolaController::class, 'updateformulario']);
Route::get('/escolas/{id}/formulariodestroy', [EscolaController::class, 'destroyformulario']);

Route::get('/escolas/{id}/turmashow', [EscolaController::class, 'showturma'])->where('id','[0-9]+');
Route::get('/escolas/turmacreate', [EscolaController::class, 'createturma']);
Route::post('/escolas/turmastore', [EscolaController::class, 'storeturma']);
Route::get('/escolas/{id}/turmaedit', [EscolaController::class, 'editturma']);
Route::post('/escolas/turmaupdate', [EscolaController::class, 'updateturma']);
Route::get('/escolas/{id}/turmadestroy', [EscolaController::class, 'destroyturma']);

Route::get('/escolas/formaluno', [EscolaController::class, 'formaluno']);

Route::get('/escolas/createform', [EscolaController::class, 'create']);
Route::post('/escolas/store', [EscolaController::class, 'store']);