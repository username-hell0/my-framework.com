<?php

declare(strict_types=1);

namespace Core\Application;

use Core\Router\RouterInterface;

/**
 * Class Application
 * @package Core\Application
 */
class Application
{
    private $router;

    /**
     * Application constructor.
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function start()
    {
        list($controller, $method) = $this->router->getController();

        echo $controller;
        echo $method;
    }
}
