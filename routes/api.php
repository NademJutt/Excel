<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("add",[ProductController::class,'add']);
Route::put("update",[ProductController::class,'update']);
Route::delete("delete/{id}",[ProductController::class,'delete']);
Route::get("search/{name}",[ProductController::class,'search']);
Route::post("save",[ProductController::class,'testData']);
Route::post("file",[ProductController::class,'fileUpload']);
