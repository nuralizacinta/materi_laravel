<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/form', function () {
//     return view('form');
// });

// Route::get('/index', function () {
//     return view('index');
// });



Route::get('/index', [PagesController::class, 'index']);
Route::get('/form', [PagesController::class, 'form']);
Route::get('/welcome1', [PagesController::class, 'welcome'])->name('welcome1');


Route::get('/master', function () {
    return view('template.master');
});
