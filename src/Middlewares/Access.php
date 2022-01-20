<?php
// JustinExample
// (c) 2022 Star Inc.

namespace JustinExample\Middlewares;

use JustinExample\Kernel\Context;
use JustinExample\Models\User;
use JustinExample\Models\Role;
use JustinExample\Validators\JWT;

class Access implements MiddlewareInterface
{
    public static function toUse(Context $context, callable $next): void
    {
        // ToDo: Check access
        $next();
    }
}
