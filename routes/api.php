<?php

use App\Http\Controllers\API\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return "hello";
});

Route::get('/artical', [ArticleController::class,'artical']);
Route::post('/artical', [ArticleController::class,'articalfromk']);
Route::get('/articaldel', [ArticleController::class, 'articaldelete']);