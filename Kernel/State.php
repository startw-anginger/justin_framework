<?php
// Justin PHP Framework
// (c)2021 SuperSonic(https://randychen.tk)

namespace AbigailExample\Kernel;

class State
{
    private array $memory;

    public function __construct() {
        $this->memory = [];
    }

    public function get(string $key) {
        return $this->memory[$key] ?? null;
    }

    public function set(string $key, $value) {
        $this->memory[$key] = $value;
    }

    public function del(string $key) {
        unset($this->memory[$key]);
    }
}
