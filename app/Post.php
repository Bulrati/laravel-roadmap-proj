<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'content',
        'excerpt'
    ];

    const DATE_FORMAT = 'd-m-Y H-i';

    public function status()
    {
        return $this->belongsTo('App\PostStatus', 'status_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'author_id');
    }
}
