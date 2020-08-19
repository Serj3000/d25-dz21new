<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table='tags';
    protected $fillable = ['post_id', 'tag_id'];

    public function post()
    {
        return $this->belongsToMany(\App\Post::clas, 'post_tag', 'post_id', 'tag_id');
    }
}
