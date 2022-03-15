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

Route::get('/', function () {//route es una clase abstracta
    return view('welcome');

});
//localhost ya esta de predeterminado dentro de las comillas se escribe la ruta
Route::get("mi_primer_web",function(){
    return view("examples.Hi_world");
});

