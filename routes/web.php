<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

//Route::post('createHome', [HomeController::class,"createHome"]);
Route::get('getHome/{id}', [HomeController::class,"getHome"]);
Route::get('getJsonHome/{id}', [HomeController::class,"getJsonHome"]);
Route::post('updateHome', [HomeController::class,"updateHome"]);
Route::get('deleteHome/{id}', [HomeController::class,"deleteHome"]);

Route::get('welcome',function(){

    $category=strip_tags(request('category'));

    if(isset($category))
        return "<h1>Category = ".$category."</h1>";
     return "<h1>Welcome </h1>";
});

Route::get('store/{category}/{item}',function($category,$item){

    $category=strip_tags($category);
    $item=strip_tags($item);
    if(isset($category))
        return "<h1>Category = ".$category."</h1> <br> <h1>Item = ".$item."</h1>";
     return "<h1>Welcome </h1>";
});


