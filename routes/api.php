<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HeloController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   // return $request->user();
//});

Route::get('halo', function(){
    return ["me" => "Guanheng"];
});

Route::resource('siswa', SiswaController::class);

// Route::get('books', [BookController::class, 'index']);
// Route::get('books/{id}', [BookController::class, 'show']);
// Route::get('books', [BookController::class, 'store']);
// Route::get('books/{id}', [BookController::class, 'update']);
// Route::get('books/{id}', [AuthController::class, 'destroy']);

Route::resource('books', BookController::class)->except(
    ['create','edit']
);