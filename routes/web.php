<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
// use Illuminate\Contracts\Support\Renderable;
/*
|
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

Route::get('/test', function(){

        $archivePosts=\App\Post::latest('updated_at')->get();
    foreach($archivePosts as $key=>$countArchivePosts){
            $yearArchiv[]=date("Y", strtotime($countArchivePosts->updated_at));
            $monthArchiv[]=date("F", strtotime($countArchivePosts->updated_at));
            $itemArchiv[]=$countArchivePosts->id;
    }
            $archive=['post_year'=>$yearArchiv, 'post_month'=>$monthArchiv, 'post_id'=>$itemArchiv];
            $collectionArchive=collect($archive);
                echo '<br>$archive= <pre>';
                print_r($collectionArchive);
                echo '<br></pre>';






            $dotArray=Arr::dot($archive);
                echo '<br>$dotArray= <pre>';
                print_r($dotArray);
                echo '<br></pre>';

            // data_get()
            // Функция data_get получает значение из вложенного массива или объекта, используя синтаксис с
            //точкой ("dot" notation):
            // $data = ['products' => ['desk' => ['price' => 100]]];
            // $price = data_get($data, 'products.desk.price');
            // 100
            foreach($archive as $key=>$valu){
            $price = data_get($archive, 'post_year'.$key);
                echo '<br>$price= <pre>';
                print_r($price);
                echo '<br></pre>';
            }






echo '|-------------------------------------------------------------------------------|';
    foreach($collectionArchive as $collection){
        echo '<br>$collection= ';
        //print_r($collection);
    }

    $items=\App\Post::latest('updated_at')->get();//get('updated_at');
    foreach($items as $item){
        $darrgs[]=['post_year'=>date("Y", strtotime($item->updated_at)), 'post_month'=>date("F", strtotime($item->updated_at)), 'post_id'=>$item->id];
            $year[]=date("Y", strtotime($item->updated_at));
            $month[]=date("F", strtotime($item->updated_at));
            $itemPosts[]=$item->id;
    }
                echo '<br> array_count_values <pre>';
                $array_count=array_count_values($year);
                print_r(array_count_values($year));
                echo '<br></pre>';



                //$shows_fetch=array_fetch($archive, '2020.August');
                echo '<br> $archive <pre>';
                print_r($archive);
                echo '<br></pre>';













        // //|--------------------------------------------------------------------
            // echo '<br><pre>';
            // print_r($darrg);
            // echo '<br></pre>';

            // foreach($darrgs as $key=>$darr){
            //     echo '<br><pre>';
            //     print_r($key);
            //     echo '<br>';
            //     print_r($darr);
            //     echo '<br></pre>';
            // }

            // $col=count($darrgs);
            // for($i=0;$i<=$col;$i++){
            //     echo '<br><pre>';
            //     print_r($i);
            //     echo '<br>';
            //     print_r($darrgs[$i]);
            //     echo '<br></pre>';

            //     if($darrgs[$i]){};
            // };

        // //|--------------------------------------------------------------------
        // //Подсчитывает количество всех значений массива
            // echo '<br>array_count_values() <pre>';
            // $arrayCount=array_count_values($darrg['post_year']);
            // print_r($arrayCount);
            // echo '<br></pre>';

            // $part=['post_year'=>$year, 'post_month'=>$month, 'post_id'=>$itemPosts];
            //     echo '<br>$part= <pre>';
            //     print_r($part);
            //     echo '<br></pre>';

        //  //Сортирует массив по значению на убывание
            // rsort($year);
            // rsort($month);
            // rsort($itemPosts);

            // echo '<br><pre>';
            // print_r($year);
            // print_r($month);
            // print_r($itemPosts);
            // echo '<br></pre>';
        
        //  //Возвращает массив с элементами в обратном порядке
            //$reversed=array_reverse($year);

        // //Подсчитывает количество всех значений массива
            // echo '<br>array_count_values() <pre>';
            // $arrcount=array_count_values($year);
            // print_r($arrcount);
            // echo '</pre>';

        //  //Получает первый ключ массива
            //     echo '<br>array_key_first() <pre>';
            //     $keyfirst=array_key_first($arrcount);
            //     print_r($keyfirst);

            // foreach($arrcount as $key=>$value){
            //     echo '<br>$key= '.$key;
            //     echo '<br>';
            //     // var_dump($darrg);
            // }

        // echo '<br>|-------------------------------------------------------------';
                // echo '<br><pre>';
                // // sort() — Сортирует массив по возрастанию
                // // sort($darrg, SORT_NATURAL | SORT_FLAG_CASE);
                // sort($darrg);

                // // array_reverse() — Возвращает массив с элементами в обратном порядке
                // $rev=array_reverse($darrg);

                // // array_count_values() — Подсчитывает количество всех значений массива
                // $count=array_count_values($darr);
                // print_r($count);

                // //array_column() — Возвращает массив из значений одного столбца входного массива
                // //$last = array_column($rev, 'post_id', 'post_date');
                // //print_r($last);

                // //array_multisort() — Сортирует несколько массивов или многомерные массивы

                // //array_filter() — Фильтрует элементы массива с помощью callback-функции
                // echo '<br></pre>';

    //return view('widgets.widgetarchivepost', ['archivePosts'=>$archivePosts]);
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
    /**
     * Show the posts of archive.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    $models = \App\Post::whereYear('updated_at', '=', $year)
        ->whereMonth('updated_at', '=', $month)
        ->latest() //orderBy('updated_at', 'DESC')
        ->get();

    $items=\App\Post::latest('updated_at')->get();
        foreach($items as $item){
            $darrgs[]=['post_year'=>date("Y", strtotime($item->updated_at)), 'post_month'=>date("F", strtotime($item->updated_at)), 'post_id'=>$item->id];
            $year_arch[]=date("Y", strtotime($item->updated_at));
            $month_arch[]=date("F", strtotime($item->updated_at));
        }
        $iteam_count=array_count_values($year_arch);

    return view('widgets.widget_archivepost', [
        'models' => $models,
        'year' => $year,
        'month' => $month,
        'iteam_count'=>$iteam_count[$year],
    ]);
})->name('item-arch-post.blog');

Route::fallback(function() {
    $posts=\App\Post::latest('created_at')
                    ->paginate(5);
    return view('index', ['params'=>$posts]);
});
