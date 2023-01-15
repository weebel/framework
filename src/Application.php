<?php

namespace Weebel\Framework;

use Weebel\Application\Application as BaseApplication;
use Weebel\Application\KernelManager;

class Application extends BaseApplication
{
    protected function makeKernelManager($arguments): KernelManager
    {
        return new \Weebel\Framework\KernelManager($arguments);
    }
}
