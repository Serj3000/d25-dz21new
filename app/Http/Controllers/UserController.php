<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function author(\App\User $user)
    {
        $posts=$user->post()
                ->latest()
                ->paginate(5);
        return view('pages.archive_blog', ['params' => $posts]);
    }
}
