<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LiputanController;
use App\Http\Controllers\PustakaController;
use App\Http\Controllers\TokohController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//

Route::get('/', [HomeController::class, 'HomeSlide']);

//

Route::get('/pustaka', [PustakaController::class, 'pustakas'])
->name('pustaka');

Route::get('/pustaka/{pustaka}/detail', [PustakaController::class,'detilPustaka'])
->name('home.pustaka.detil');

Route::get('/pustaka/detail', function () {
    return view('home.pustaka.detil');
});

//

Route::get('/tradisi', [PustakaController::class, 'tradisis'])
->name('tradisi');

Route::get('/tradisi/{pustaka}/detail', [PustakaController::class,'detilPustaka'])
->name('home.tradisi.detil');

//

Route::get('/kesenian', [PustakaController::class, 'kesenians'])
->name('kesenian');

Route::get('/kesenian/{pustaka}/detail', [PustakaController::class,'detilPustaka'])
->name('home.kesenian.detil');

//

Route::get('/kuliner', [PustakaController::class, 'kuliners'])
->name('kuliner');

Route::get('/kuliner/{pustaka}/detail', [PustakaController::class,'detilPustaka'])
->name('home.kuliner.detil');

//

Route::get('/tokoh', [TokohController::class, 'tokohs'])
->name('tokoh');

Route::get('/tokoh/{tokoh}/detail', [TokohController::class,'detilTokoh'])
->name('home.tokoh.detil');

//

Route::get('/liputan', [LiputanController::class, 'liputans'])
->name('liputan');

Route::get('/liputan/{liputan}/detail', [LiputanController::class,'detilLiputan'])
->name('home.liputan.detil');

Route::get('/liputan/detail', function () {
    return view('home.liputan.detil');
});

// ------------------------------------------------------------------------------------- Admin

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
    $user = Auth::user();
    return view('admin.index', ['title' => 'Dashboard', 'authh' => $user]);
})->name('home')->middleware('auth');


Route::get('/admin/LihatLiputan', function () {
    $user = Auth::user();
    return view('admin.LihatLiputan', ['title' => 'Lihat Data Liputan', 'authh' => $user]);
})->middleware('auth');


Route::get('/admin/EditLiputan', [LiputanController::class, 'liputan'])
->name('admin.liputan')->middleware('auth');

Route::post('/admin/EditLiputan', [LiputanController::class, 'store'])->middleware('auth');


Route::get('/admin/liputan/{liputan}/edit-liputan', [LiputanController::class,'edit'])
    ->name('admin.edit-liputan')->middleware('auth');

Route::put('/admin/liputan/{liputan}', [LiputanController::class,'update'])
    ->name('admin.update.liputan')->middleware('auth');
    

Route::delete('/admin/liputan/{liputan}', [LiputanController::class,'destroy'])
->name('admin.destroy.liputan')->middleware('auth');

Route::get('/admin/Users',  [UserController::class, 'users'])
->name('admin.Users')->middleware('auth') ;

Route::post('/admin/Users', [UserController::class, 'store'])->middleware('auth');

Route::get('/admin/Users/{user}/edit-user', [UserController::class,'edit'])
->name('admin.edit-user')->middleware('auth');

Route::put('/admin/Users/{user}', [UserController::class,'update'])
->name('admin.update')->middleware('auth');

Route::delete('/admin/Users/{user}', [UserController::class,'destroy'])
->name('admin.destroy')->middleware('auth');