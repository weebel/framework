<?php

namespace Weebel\Framework;

use Weebel\Application\KernelManager as BaseKernelManager;
use Weebel\Configuration\ConfigurationProvider;
use Weebel\Console\ConsoleProvider;
use Weebel\Console\ExceptionHandler as ConsoleExceptionHandler;
use Weebel\Console\Kernel as ConsoleKernel;
use Weebel\ControllerCaller\ControllerCallerProvider;
use Weebel\Dispatcher\EventDispatcherProvider;
use Weebel\HttpKernel\ExceptionHandler as HttpExceptionHandler;
use Weebel\HttpKernel\HttpKernel;
use Weebel\Router\RouterProvider;

class KernelManager extends BaseKernelManager
{
    protected $kernels = [
        'http' => HttpKernel::class,
        'console' => ConsoleKernel::class
    ];

    protected $baseProviders = [
        EventDispatcherProvider::class,
        ConfigurationProvider::class
    ];

    protected $baseModeProviders = [
        'console' => [
            ConsoleProvider::class
        ]
    ];

    protected $modeProviders = [
        'http' => [
            RouterProvider::class,
            ControllerCallerProvider::class
        ]
    ];

    protected $exceptionHandlers = [
        'http' => HttpExceptionHandler::class,
        'console' => ConsoleExceptionHandler::class
    ];
}
