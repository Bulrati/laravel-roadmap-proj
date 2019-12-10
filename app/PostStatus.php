<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostStatus extends Model
{
    public $timestamps = false;
    protected $fillable = ['status'];

    const STATUS_PUBLISHED = 'published';
    const STATUS_UNPUBLISHED = 'unpublished';
    const STATUS_DRAFT = 'draft';

    const ID_PUBLISHED = 1;
    const ID_UNPUBLISHED = 2;
    const ID_DRAFT = 3;
}
