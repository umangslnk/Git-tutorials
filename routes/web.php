<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hey',function (){
    return view('firstpost');
});
route::get('/post/{id?}', function (string $id = null) {
    if($id){
        return "<h1>post id : ". $id ."</h1>";
    }else{
        return "<h1>no id found.</h1>";
    }
   
});
Route::fallback(function(){
    return "<h1>page not found.</h1>";

});

