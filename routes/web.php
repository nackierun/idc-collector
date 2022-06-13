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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', App\Http\Livewire\IdCard\Index::class)->name('idc.index');
Route::get('/idc/create', App\Http\Livewire\IdCard\create::class)->name('idc.create');
Route::get('/idc/edit/{item}', App\Http\Livewire\IdCard\edit::class)->name('idc.edit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
