<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['slug', 'author_id', 'title', 'content', 'excerpt', 'status_id'];
}
