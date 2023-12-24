<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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



    Route::get('/',  function () { return view('auth/login'); });
    Route::get('getPages', function () { return view('Html_CRUD_Pages/getPages');  });
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/home', [HomeController::class, 'index'])->name('home');



    Route::middleware(['auth'])->group(function () {
        
        Route::get('index', function () { return view('index'); });
        Route::get('createPages', function () {  return view('Html_CRUD_Pages/createPages'); });
        Route::get('deletePages', function () { return view('Html_CRUD_Pages/deletePages'); });
        Route::get('updatePages', function () { return view('Html_CRUD_Pages/updatePages'); });
            
        
    });

    Auth::routes();




