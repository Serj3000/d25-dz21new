<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'preview_text',
        'body',
    ];

    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(\App\Category::class, 'category_id', 'id');
    }

    public function tag()
    {
        return $this->belongsToMany(\App\Tag::clas, 'post_tag', 'post_id', 'tag_id');
    }
}
