<?php

use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(\App\Post::all() as $post_id){
            $limit=rand(3,6);
            $tagsId=\App\Tag::inRandomOrder()->limit($limit)->get();

            foreach($tagsId as $tag_id){
                $postTags[]=['post_id'=>$post_id->id, 'tag_id'=>$tag_id->id, 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')];
            }
        }
        DB::table('post_tag')->insert($postTags);
    }
}
