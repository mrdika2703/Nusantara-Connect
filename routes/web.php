<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'HomeSlide']);

Route::get('/pustaka', function () {
    return view('home.pustaka.index');
});

Route::get('/tradisi', function () {
    return view('home.pustaka.tradisi');
});

Route::get('/kesenian', function () {
    return view('home.pustaka.kesenian');
});

Route::get('/kuliner', function () {
    return view('home.pustaka.kuliner');
});

Route::get('/tokoh', function () {
    return view('home.tokoh.index');
});

Route::get('/liputan', function () {
    return view('home.liputan.index');
});


Route::get('/admin', [UserController::class, 'showLoginForm'])
->name('login');

Route::post('/admin', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout'])
->name('logout');

// Route::get('/admin', function () {
//     return view('admin.login');
// });

// Route::get('/admin/Dashboard', function () {
//     return view('admin.index', ['title' => 'Dashboard']);
// });

Route::get('/admin/Dashboard', function () {
    return view('admin.index', ['title' => 'Dashboard']);
})->name('home')->middleware('auth');

Route::get('/admin/LihatLiputan', function () {
    return view('admin.LihatLiputan', ['title' => 'Lihat Data Liputan']);
})->middleware('auth');

Route::get('/admin/EditLiputan', function () {
    return view('admin.EditLiputan', ['title' => 'Edit Data Liputan']);
})->middleware('auth');

Route::get('/admin/LihatPustaka', function () {
    return view('admin.LihatPustaka', ['title' => 'Lihat Data Pustaka']);
})->middleware('auth');

Route::get('/admin/EditPustaka', function () {
    return view('admin.EditPustaka', ['title' => 'Edit Data Pustaka']);
})->middleware('auth');

Route::get('/admin/Users',  [UserController::class, 'users'])
->name('admin.Users')->middleware('auth') ;

Route::post('/admin/Users', [UserController::class, 'store'])->middleware('auth');

Route::get('/admin/Users/{user}/edit-user', [UserController::class,'edit'])
->name('admin.edit-user')->middleware('auth');

Route::put('/admin/Users/{user}', [UserController::class,'update'])
->name('admin.update')->middleware('auth');

Route::delete('/admin/Users/{user}', [UserController::class,'destroy'])
->name('admin.destroy')->middleware('auth');