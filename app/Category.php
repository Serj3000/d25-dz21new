<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable = ['name', 'slug'];

    public function post()
    {
        return $this->hasMany(\App\Post::class, 'category_id', 'id');
    }
}
