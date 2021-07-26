<?php
// Justin PHP Framework
// (c)2021 SuperSonic(https://randychen.tk)

namespace AbigailExample\Kernel;

use Error;
use Exception;

class Config
{
    private const FILENAME = __DIR__ . "/../../config.inc.php";
    private const REQUIREMENTS = [
        "DB_DSN",
        "DB_USERNAME",
        "DB_PASSWORD"
    ];
    private array $config;

    public function __construct()
    {
        if (file_exists(self::FILENAME)) {
            $this->config = include_once self::FILENAME;
            foreach (self::REQUIREMENTS as $key) {
                if (!array_key_exists($key, $this->config)) {
                    throw new Error("$key required is not found in the configuration.");
                }
            }
        } else {
            throw new Error(sprintf("Configuration(%s) is not found.", self::FILENAME));
        }
    }

    public function get(string $key, bool $required = true): ?string
    {
        if (array_key_exists($key, $this->config)) {
            return $this->config[$key];
        } elseif (!$required) {
            return null;
        } else {
            throw new Exception("$key is not found in the configuration");
        }
    }
}
