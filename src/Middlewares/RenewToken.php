<?php
// JustinExample
// (c) 2022 Star Inc.

namespace JustinExample\Middlewares;

use JustinExample\Kernel\Context;
use JustinExample\Models\User;
use JustinExample\Validators\JWT;

class RenewToken implements MiddlewareInterface
{
    public static function toUse(Context $context, callable $next): void
    {
        $user = $context->getState()->get("user");
        if ($user instanceof User && $user->checkReady()) {
            $jwt = (new JWT($context))->issue($user);
            $context->getResponse()->setHeader('X-Next-Token', $jwt);
        }
        $next();
    }
}
