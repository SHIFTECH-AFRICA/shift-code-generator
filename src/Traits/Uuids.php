<?php

namespace ShiftechAfrica\CodeGenerator\Traits;

use Exception;
use Webpatser\Uuid\Uuid;

trait Uuids
{
    /**
     * Boot function from laravel.
     * @return void
     * @throws Exception
     */
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}
