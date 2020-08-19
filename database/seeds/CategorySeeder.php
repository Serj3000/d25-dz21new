<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            ['name'=>'Features', 'slug'=>'features', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['name'=>'Food', 'slug'=>'food', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['name'=>'Travel', 'slug'=>'travel', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['name'=>'Recipe', 'slug'=>'recipe', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['name'=>'Bread', 'slug'=>'bread', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['name'=>'Meat', 'slug'=>'meat', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['name'=>'Fastfood', 'slug'=>'fastfood', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['name'=>'Salad', 'slug'=>'salad', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['name'=>'Soup', 'slug'=>'soup', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ];
        DB::table('categories')->insert($categories);
    }
}
