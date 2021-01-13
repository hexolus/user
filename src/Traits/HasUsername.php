<?php

namespace Hexolus\User\Traits;

trait HasUsername
{
    public static function bootHasUsername()
    {
        self::creating(function ($model) {
            if (!$model->username) {
                $model->username = config('user.username.handler')::handle($model->name);
            }
        });
    }
}
