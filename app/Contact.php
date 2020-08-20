<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table='contacts';

    // public function touch()
    // {
    //     return $this->hasMany(\App\Touch::class, 'contact_id');
    // }
}
