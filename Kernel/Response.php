<?php
// Justin PHP Framework
// (c)2021 SuperSonic(https://randychen.tk)

namespace AbigailExample\Kernel;

class Response
{
    private const COOKIES_ROOT = "/";

    public function setHeader(string $key, string $value, bool $replace = true): Response
    {
        header("$key: $value", $replace);
        return $this;
    }

    public function setCookie(string $key, string $value, int $expires): Response
    {
        setcookie($key, $value, [
            "expires" => $expires,
            'path' => self::COOKIES_ROOT,
            'httponly' => true,
            'samesite' => 'Strict'
        ]);
        return $this;
    }
}
