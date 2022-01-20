<?php
// Justin PHP Framework
// It's a portable framework for PHP 8.0+, powered by open source community.
// Licensed under the MIT License. (https://ncurl.xyz/s/2ltII6Ang)
// (c) 2022 Star Inc. (https://starinc.xyz)

namespace AbigailExample;

use AbigailExample\Kernel\Context;

class API
{
    private Context $context;

    public function __construct()
    {
        $this->context = new Context();
        // Call Middlewares
    }

    /**
     * @return Context
     */
    public function getContext(): Context
    {
        return $this->context;
    }
}
