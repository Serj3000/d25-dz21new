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
//
Route::get('/layout', function(){
    return view('layouts.layout');
});
Route::get('/sidebar', function() {
    return view('sidebars.sidebar_index');
});
/*
|---------------------------------------------------------------------------
*/
Route::get('/', function () {
    $posts=\App\Post::latest()
                    ->paginate(5);
    return view('index', ['params' => $posts]);
})->name('index.blog');

Route::get('/category/{slug?}', 'ArchiveController@category')->name('category.blog');

Route::get('/archive-blog', 'ArchiveController@archive')->name('archive-blog.blog');

Route::get('/singl-post-{id?}', 'PostController@singl_post')->name('singl-post.blog');

Route::get('/tag/{tag?}', 'ArchiveController@tag')->name('tag.blog');

Route::get('/author/{user?}', 'UserController@author')->name('author.blog');

Route::get('/about-us', function(){
    return view('pages.about_us');
})->name('about-us.blog');

Route::get('/contact', function(){
    $contact=\App\Contact::get()->first();
    return view('pages.contact', ['contact'=>$contact]);
})->name('contact.blog');

Route::get('/typography', function(){
    return view('pages.typography');
})->name('typography.blog');

Route::get('/laravel', function () {
    return view('pages.welcome');
})->name('laravel.blog');

Route::get('/item-arch-post/{year?}/{month?}', function($year=null, $month=null){
    $items=\App\Post::all();//get('updated_at');


    foreach($items as $item){
        $darrg[]=['post_date'=>date("Y", strtotime($item->updated_at)),'post_id'=>$item->id];
        // echo '<br>'.$item->updated_at;
        //echo '<br>'.date("F Y", strtotime($item->updated_at)).'<br><br><br>';

        $darr[]=date("Y", strtotime($item->updated_at));
    }
        echo '<br><pre>';
        // sort($darrg, SORT_NATURAL | SORT_FLAG_CASE);
        sort($darrg);
        $rev=array_reverse($darrg);

        $count=array_count_values($darr);
        print_r($count);
        print_r($count[2020]);

        //$last = array_column($rev, 'post_id', 'post_date');
        //print_r($last);

        echo '<br></pre>';

    //dd(sort($darrg, SORT_NATURAL | SORT_FLAG_CASE));
    exit;
    return view('widgets.widgetarchivepost');
})->name('item-arch-post.blog');

Route::fallback(function() {
    $posts=\App\Post::latest('created_at')
                    ->paginate(5);
    return view('index', ['params'=>$posts]);
});
