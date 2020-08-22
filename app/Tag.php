<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table='tags';
    protected $fillable = ['name', 'slug'];

    public function post()
    {
        return $this->belongsToMany(\App\Post::class, 'post_tag', 'post_id', 'tag_id');
    }
}
