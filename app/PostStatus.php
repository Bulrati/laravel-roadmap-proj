<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostStatus extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    const STATUS_PUBLISHED = 'published';
    const STATUS_UNPUBLISHED = 'unpublished';
    const STATUS_DRAFT = 'draft';

}
