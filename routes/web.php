<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\registerController;
use App\Http\Controllers\SiswaController;

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
    return view('landing');
});

Route ::get('/registration', [registerController ::class, 'index'])->name('index');
Route ::get('/cetak-pdf', [registerController ::class, 'cetakpdf'])->name('cetakpdf');
Route ::post('/registerStore', [registerController ::class, 'store'])->name('registerStore');
