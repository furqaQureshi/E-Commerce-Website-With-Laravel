<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\User;
use App\Http\Controllers\UserController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
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


Route::get('/demo', [UserController::class, 'index']);


Route::get('fluent', function () {
    // fluent method ki chang banta hai 

    $a =  "hello";
    // $a = Str::ucfirst(($a));
    // $a = Str::replace('hello', 'Hey', $a);
    // $a = Str::camel($a);
    // Str::replace('Hello','saaa', $a);
    // $a = Str::of($a) ->
    // ucfirst($a)->
    // replace('hello', 'Hey', $a);
    // echo $a;
});

Route::group(['prefix' => 'customer'], function () {
    Route::get('register', [CustomerController::class, 'index']);
    Route::post('register', [CustomerController::class, 'register']);
    Route::get('data', [CustomerController::class, 'store']);
    Route::get('edit/{id}', [CustomerController::class, 'edit']);
    Route::post('edit/{id}', [CustomerController::class, 'update']);
    Route::get('delete/{id}', [CustomerController::class, 'destroy']); 
});