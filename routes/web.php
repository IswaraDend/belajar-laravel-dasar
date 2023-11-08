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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pzn', function (){
    return "Hello Programmer Zaman Now";
});

Route::redirect('/youtube', '/pzn');

Route::fallback(function(){
    return "404 by Programmer Zaman Now";
});

Route::view('/hello', 'hello', ['name' => 'Iswara']);

Route::get('/hello-again', function (){
    return view('hello', ['name' => 'Iswara']);
});

Route::get('/hello-world', function (){
    return view('hello.world', ['name' => 'Iswara']);
});

Route::get('/controller/hello/request', [App\Http\Controllers\HelloController::class, 'request']);
Route::get('/controller/hello/{name}', [App\Http\Controllers\HelloController::class, 'hello']);


Route::get('/input/hello', [App\Http\Controllers\InputController::class, 'hello']);
Route::post('/input/hello', [App\Http\Controllers\InputController::class, 'hello']);
Route::post('/input/hello/first', [App\Http\Controllers\InputController::class, 'helloFirstName']);
Route::post('/input/hello/input', [App\Http\Controllers\InputController::class, 'helloInput']);