<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/books', [BookController::class, 'index']);

Route::get('/add', [BookController::class, 'create']);

Route::post('/store', [BookController::class, 'store']);

Route::get('/edit/{id}', [BookController::class, 'edit']);

Route::put('/update/{id}', [BookController::class, 'update']);

Route::post('/delete', [BookController::class, 'destroy']);

Route::get('/trash', [BookController::class, 'trash']);

Route::get('/restore/{id}', [BookController::class, 'restored']);

Route::post('/forceDelete', [BookController::class, 'forceDelete']);
