<?php

use Illuminate\Database\Seeder;

class TouchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Touch::class, 20)->create();
    }
}
