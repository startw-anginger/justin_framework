<?php
// Justin PHP Framework
// (c)2021 SuperSonic(https://randychen.tk)

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
