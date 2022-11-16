<?php

use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('tes', function () {
    return view('tes');
});

Route::get('two', function () {
    $nama = 'Army';
    return view('two', ['nama' =>  $nama]);
});
Route::get('/produk', [dataController::class, 'index']);

Route::get('/show', [dataController::class, 'show_eloquent']);
Route::get('/insert', [produkController::class, 'insert_eloquent']);
Route::get('/update', [produkController::class, 'update_eloquent']);
Route::resource('mahasiswa', mahasiswacontroller::class);


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['logincheck:admin']], function () {
    });
    Route::group(['Middleware' => ['logincheck:editor']], function () {
        Route::resource('editor', EditorController::class);
    });
});