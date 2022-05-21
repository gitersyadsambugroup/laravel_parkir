<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkirController;

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

Route::get('/parkir', [ParkirController::class, 'index'])->name('parkir');
Route::get('/parkir/add', [ParkirController::class, 'add'])->name('vtambah_parkir');
Route::post('/parkir/add', [ParkirController::class, 'insertdata'])->name('tambah_parkir');
