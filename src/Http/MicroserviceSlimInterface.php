<?php

declare(strict_types=1);

namespace Infrastructure\Http;

use Psr\Container\ContainerInterface;
use Slim\Interfaces\RouteCollectorProxyInterface;

interface MicroserviceSlimInterface extends RouteCollectorProxyInterface
{
    public function __construct(ContainerInterface $container);
}
