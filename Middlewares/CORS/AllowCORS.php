<?php
// Justin PHP Framework
// It's a portable framework for PHP 8.0+, powered by open source community.
// Licensed under the MIT License. (https://ncurl.xyz/s/2ltII6Ang)
// (c) 2022 Star Inc. (https://starinc.xyz)

require_once __DIR__ . '/../../Controllers/ControllerInterface.php';

interface AllowCORS extends ControllerInterface
{
    public function getAllowOrigin(): string;

    public function getAllowMethods(): array;

    public function getAllowHeaders(): array;

    public function getAllowCredentials(): bool;
}
