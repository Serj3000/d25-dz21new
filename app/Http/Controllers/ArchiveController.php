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

    /**
     * Show the posts of archive.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function archiveIteam($year, $month)
    {
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
    }
}
