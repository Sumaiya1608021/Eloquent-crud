<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


Route::post('/insert',[Postcontroller::class,'insert']);
Route::post('/catInsert',[Postcontroller::class,'catInsert']);
Route::post('/update/{id}',[Postcontroller::class,'update']);
Route::get('/delete/{id}',[Postcontroller::class,'delete']);
Route::get('/show',[Postcontroller::class,'show']);

