<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    protected $table = 'content';

    protected $fillable = ['url', 'type', 'userId'];
}
