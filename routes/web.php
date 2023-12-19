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

Route::get('getHome', [HomeController::class,"home"]);
Route::get('getHome/{id}', [HomeController::class,"getHome"]);
Route::get('getServices', [HomeController::class,"services"]);
Route::get('getRecentwork', [HomeController::class,"recentWork"]);
Route::get('getTestimonials', [HomeController::class,"testimonials"]);
Route::get('getAbout', [HomeController::class,"about"]);
Route::get('getContact', [HomeController::class,"contact"]);


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


