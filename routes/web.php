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

//POST GET DELETE PUT

// Route::get('/contact', function () {
//     return '<h1>Hello From Contact Page</h1>';
// })->middleware('auth');

// Route::get('/about', function () {
//     return view('welcome');
// });

// Route::view('/about', 'welcome');

// Route::redirect('/go', '/about');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/profile', function () {
//     return view('profile');
// })
//     ->name('profile')
//     ->middleware('auth');

Route::get('/login', function () {
    return '<h1>You Must Be Login</h1>';
})->name('login');

Route::group(['middleware' => ['test']], function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::get('/testMiddle', function () {
        return 'Hello World';
    })->middleware('test');
});

Route::resource('/books', BookController::class);

// Route::prefix('books')->group(function () {
//     Route::get('/', [BookController::class, 'index']);
// });
