<?php
// Justin PHP Framework
// (c)2021 SuperSonic(https://randychen.tk)

namespace AbigailExample\Models;

use JsonSerializable;

interface ModelInterface extends JsonSerializable
{
    public function checkReady(): bool;

    public function fromArray(array $array): ModelInterface;

    public function toArray(): array;
}
