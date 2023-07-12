<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
//     return view('index');
// });

Route::get('/', [IndexController::class, 'eng']);
Route::get('/id', [IndexController::class, 'indo']);
Route::get('/input', [IndexController::class, 'input']);
Route::post('/add', [IndexController::class, 'post']);

Route::delete('/delete/{id}', [IndexController::class, 'delete']);
Route::get('/update/{id}', [IndexController::class, 'updateView']);
Route::put('/ubah', [IndexController::class, 'update']);
