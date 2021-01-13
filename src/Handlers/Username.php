<?php

namespace Hexolus\User\Handlers;

use Illuminate\Support\Str;

class Username
{
    public static function handle($input)
    {
        return Str::limit(
            Str::slug(
                trim(
                    mb_strtolower($input)
                ),
                ''
            ),
            intval(config('user.username.limit', 15)) - 4,
            ''
        ) . strval(floor(rand(1000, 9999)));
    }
}
