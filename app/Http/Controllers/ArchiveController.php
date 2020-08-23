<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function category($slug=null)
    {
    $category=\App\Category::where('slug', $slug)
                            ->first();
    $posts=$category->post()
                    ->latest()
                    ->paginate(5);
    return view('pages.archive_blog', ['params' => $posts]);
    //     $posts=\App\Post::where('category_id', $category->id)
    //                     ->latest()
    //                     ->paginate(5);
    //     return view('pages.archive_blog', ['params' => $posts]);
    }

    public function archive()
    {
        $posts=\App\Post::latest()
                        ->paginate(5);
        return view('pages.archive_blog', ['params' => $posts]);
    }

    public function tag(\App\Tag $tag)
    {
    // $tagPostId=$tag->post->toArray();
    //     foreach($tagPostId as $postTag){
    //         $postId[]=$postTag['id'];
    //     }
    // $posts=\App\Post::whereIn('id', $postId)
    //                 ->latest()
    //                 ->paginate(5);
    // dd($tagPostId, $posts, $post);

    $posts=$tag->post()
                ->latest()
                ->paginate(5);
    return view('pages.archive_blog', ['params' => $posts]);

        // // //---------attach()------------
        // $numIdPost=\App\Post::max('id');
        // $tagpost=\App\Post::find($numIdPost);
        // $tagpost->tag()->attach($request->input('post-tag'));
    }
}
