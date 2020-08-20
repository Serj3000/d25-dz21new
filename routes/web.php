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

Route::get('/category-{category?}', function(\App\Category $category){
    $posts=\App\Post::where('category_id', $category->id)
                    ->latest()
                    ->paginate(5);
    return view('pages.archive_blog', ['parametr' => $posts]);
})->name('category.blog');

Route::get('/archive-blog', function(){
    $posts=\App\Post::latest()
                    ->paginate(5);
    return view('pages.archive_blog', ['parametr' => $posts]);
})->name('archive-blog.blog');

Route::get('singl-post-{id?}', function(\App\Post $id){
        // //Вариант 1. Счетчик просмотров поста, с методом save()
    // $id->saw+=1;
    // $id->save();
    // //Вариант 2. Счетчик просмотров поста, с методом increment() (без метода save())
    $id->increment('saw');
    return view('pages.singl_post', ['post'=>$id]);
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
