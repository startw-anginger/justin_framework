<?php
// Justin PHP Framework
// It's a portable framework for PHP 8.0+, powered by open source community.
// Licensed under the MIT License. (https://ncurl.xyz/s/2ltII6Ang)
// (c) 2022 Star Inc. (https://starinc.xyz)

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
