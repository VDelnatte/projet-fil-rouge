<?php

namespace Sthom\Kernel;
class Router
{


    public function __construct(private readonly array $routes){}
    /**
     * @method dispatch
     * Cette méthode permet de dispatcher une requête HTTP
     *
     * @param string $method
     * @param string $uri
     * @return string
     * @throws \Exception
     */
    public final function dispatch(string $method, string $uri, array $queryParameters): void
    {
        $isRouteFound = false;
        foreach ($this->routes as $route) {
            if ($route['path'] === $uri) {
                if(is_array($route['method'])) {
                    if (!in_array($_SERVER['REQUEST_METHOD'],$route['method'])) {
                        throw new \Exception('Method not allowed');
                    }
                } else {
                    if ($_SERVER['REQUEST_METHOD'] !== $route['method']) {
                        throw new \Exception('Method not allowed');
                    }
                }
                $class = explode('@', $route['handler'])[0];
                $namespace = $_ENV['CONTROLLER_NAMESPACE'];
                $controller = $namespace . $class;
                $method = explode('@', $route['handler'])[1];
                $controllerInstance = new $controller();
                // operator spread to pass the array as arguments even if it is empty
                $controllerInstance->$method(...array_values($queryParameters));
                $isRouteFound = true;
            }
        }
        if (!$isRouteFound) {
            throw new \Exception('Route not found');
        }
    }
}

