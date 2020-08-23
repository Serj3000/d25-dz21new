<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function singl_post(\App\Post $id)
    {
    // //Вариант 1. Счетчик просмотров поста, с методом save()
    // $id->saw+=1;
    // $id->save();
    // //Вариант 2. Счетчик просмотров поста, с методом increment() (без метода save())
    $id->increment('saw');
    return view('pages.singl_post', ['post'=>$id]);
    }
}
