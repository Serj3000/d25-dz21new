<?php

use Illuminate\Database\Seeder;

use App\Tag;
use Faker\Generator as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(\App\Tag::class, 1)->create();
        $tags=[
            ['name'=>'CREATIVE', 'slug'=>'creative', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'UNIQUE', 'slug'=>'unique', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'TEMPLATE', 'slug'=>'template', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'PHOTOGRAPHY', 'slug'=>'photography', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'TRAVEL', 'slug'=>'travel', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'LIFESTYLE', 'slug'=>'lifestyle', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'WORDPRESS TEMPLATE', 'slug'=>'wordpress template', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'FOOD', 'slug'=>'food', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
            ['name'=>'IDEA', 'slug'=>'idea', 'created_at'=>date("Y-m-d h:i:s"), 'updated_at'=>date("Y-m-d h:i:s")],
        ];
        DB::table('tags')->insert($tags);
    }
}
