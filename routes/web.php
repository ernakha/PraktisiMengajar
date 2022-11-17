<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tes', function () {
    return view('tes');
});

Route::get('two', function () {
    $nama = 'Erna';
    return view('two',['nama' => $nama ]);
});

// Route::get('/produk',[produkController::class,'index']);
// Route::get('/show',[produkController::class,'show']);
// Auth::routes();
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['logincheck:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['logincheck:editor']], function () {
        Route::resource('editor', EditorController::class);
    });
});

Route::resource('/barang',produkController::class);
