<?php

declare(strict_types=1);

use Convenia\Mongodb\Eloquent\Model as Eloquent;
use Convenia\Mongodb\Relations\EmbedsMany;

class Address extends Eloquent
{
    protected $connection = 'mongodb';
    protected static $unguarded = true;

    public function addresses(): EmbedsMany
    {
        return $this->embedsMany('Address');
    }
}
