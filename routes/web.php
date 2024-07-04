<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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


Route::get('/artical', [ArticleController::class,'articl']);
Route::get('/artical-show/{id}', [ArticleController::class,'articalShow']);
Route::post('/artical', [ArticleController::class,'articalfrom']);
Route::get('/articalfeed', [ArticleController::class, 'articalfeed']);
Route::get('/articalfeed/{id}', [ArticleController::class, 'deleteArtical']);
