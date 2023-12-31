<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\spController;
use App\Http\Controllers\posController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\andromedaspController;
use App\Http\Controllers\andromedaposController;
use App\Http\Controllers\landing2Controller;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', [dashbordController::class, 'hello'])->name('alam');

// Route::get('/dashboard', function(){
//     return view('dashboard');
// });

Route::get('/sp', [spController::class, 'index'])->name('sp');


Route::get('/pos', [posController::class, 'index'])->name('pos');

Route::get('/landing', [landingController::class, 'index'])->name('landing');

Route::get('/andromedasp', [andromedaspController::class, 'index'])->name('andromedasp');

Route::get('/andromedapos', [andromedaposController::class, 'index'])->name('andromedapos');

Route::get('/landing2', [landing2Controller::class, 'index'])->name('landing2');