<?php

use App\Http\Controllers\UserController;
use App\Models\home;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index', ['homes' => home::all()]);
    // return view('home.index', ['homes' => [
    //     [
    //         'gambar-home1' => 'images/slideshow/slide1.jpg'
    //     ]
    // ]]);
    // dd($homes);



});

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


Route::get('/admin', function () {
    return view('admin.index', ['title' => 'Dashboard']);
});

Route::get('/admin/Dashboard', function () {
    return view('admin.index', ['title' => 'Dashboard']);
});

Route::get('/admin/LihatLiputan', function () {
    return view('admin.LihatLiputan', ['title' => 'Lihat Data Liputan']);
});

Route::get('/admin/EditLiputan', function () {
    return view('admin.EditLiputan', ['title' => 'Edit Data Liputan']);
});

Route::get('/admin/LihatPustaka', function () {
    return view('admin.LihatPustaka', ['title' => 'Lihat Data Pustaka']);
});

Route::get('/admin/EditPustaka', function () {
    return view('admin.EditPustaka', ['title' => 'Edit Data Pustaka']);
});

Route::get('/admin/Users',  [UserController::class, 'users'])
->name('admin.Users') ;

Route::post('/admin/Users', [UserController::class, 'store']);

Route::get('/admin/Users/{user}/edit-user', [UserController::class,'edit'])
->name('admin.edit-user');

Route::put('/admin/Users/{user}', [UserController::class,'update'])
->name('admin.update');

Route::delete('/admin/Users/{user}', [UserController::class,'destroy'])
->name('admin.destroy');
