<?php

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

//Frontend Routes

Route::get('/', "AdminController@dashboard");

Route::get("career","FrontendController@career")->name("career");
Route::get("login","FrontendController@login")->name("login");
Route::get("register","FrontendController@register")->name("register");
Route::get("children","FrontendController@children")->name("children");


