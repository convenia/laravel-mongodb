<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\Relations\MorphTo;
use Convenia\Mongodb\Eloquent\Model as Eloquent;

class Photo extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'photos';
    protected static $unguarded = true;

    public function hasImage(): MorphTo
    {
        return $this->morphTo();
    }
}
