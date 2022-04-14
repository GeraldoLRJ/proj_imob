<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/homes/create', [HomeController::class, 'create']);
Route::get('/homes/{id}', [HomeController::class, 'show']);
Route::post('/homes', [HomeController::class, 'store']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::delete('/homes/{id}', [HomeController::class, 'destroy']);
Route::get('/homes/edit/{id}', [HomeController::class, 'edit']);
Route::put('/homes/update/{id}', [HomeController::class, 'update']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
