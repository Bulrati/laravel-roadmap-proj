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

    const STATUSES = [
        self::STATUS_PUBLISHED   => 'Published',
        self::STATUS_UNPUBLISHED => 'Unpublished',
        self::STATUS_DRAFT       => 'Draft'
    ];

    const ID_PUBLISHED = 1;
    const ID_UNPUBLISHED = 2;
    const ID_DRAFT = 3;

    /**
     * Returns all Statuses
     *
     * @return array
     */
    public static function getAllStatuses()
    {
        $postStatuses        = self::all();
        $postStatusesOptions = $postStatuses->pluck('status', 'id')->toArray();

        return $postStatusesOptions;
    }
}
