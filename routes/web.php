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
    return view('index');
})->name('index.blog');

Route::get('/archive-blog', function(){
    return view('pages.archive_blog');
})->name('archive-blog.blog');

Route::get('/singl-post', function(){
    return view('pages.singl_post');
})->name('singl-post.blog');

Route::get('/about-us', function(){
    return view('pages.about_us');
})->name('about-us.blog');

Route::get('/contact', function(){
    return view('pages.contact');
})->name('contact.blog');

Route::get('/laravel', function () {
    return view('pages.welcome');
})->name('laravel.blog');
