<?php
// Justin PHP Framework
// It's a portable framework for PHP 8.0+, powered by open source community.
// Licensed under the MIT License. (https://ncurl.xyz/s/2ltII6Ang)
// (c) 2022 Star Inc. (https://starinc.xyz)

namespace AbigailExample\Kernel;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class Database
{
    private EntityManager $entityManager;

    public function __construct(Config $config)
    {
        // config
        $db_config = Setup::createConfiguration();

        // database configuration parameters
        $conn = array();

        // obtaining the entity manager
        $this->entityManager = EntityManager::create($conn, $db_config);
    }

    // https://www.uuidgenerator.net/dev-corner/php
    public static function guidV4($data = null): string
    {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager(): EntityManager
    {
        return $this->entityManager;
    }
}
