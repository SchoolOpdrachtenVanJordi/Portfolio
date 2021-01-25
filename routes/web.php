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

Route::get('/welcome', function () {
    return view('welcome');
    return view('welcome', compact('posts'));
});

Route::get('/projects', function () {
    return view('projects');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/welcome', function () {
    $post = DB::table('posts')->find(3);
    return view('welcome', compact('post'));
});


$user = DB::table('posts')->where("id" == 1)->first();


