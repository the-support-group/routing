<?php

namespace Air\Routing\Router;

use Air\Routing\Route\RouteInterface;
use Air\Routing\ResolvedRequest\ResolvedRequestInterface;
use Air\HTTP\Request\RequestInterface;
use Exception;

abstract class Router implements RouterInterface
{
    /**
     * @var array $routes An array of routes.
     */
    protected $routes;


    /**
     * @var string $cachePath A file path to cache routes in.
     */
    protected $cachePath;


    /**
     * @param array $routes An array of routes.
     * @param string $cachePath A file path to cache routes in.
     */
    public function __construct(array $routes, $cachePath = null)
    {
        $this->routes = $routes;
        $this->cachePath = $cachePath;
    }


    /**
     * @param RouteInterface $route A route.
     */
    public function addRoute(RouteInterface $route)
    {
        $this->routes[$route->getName()] = $route;
    }


    /**
     * @param array $routes An array of routes.
     */
    public function addRoutes(array $routes)
    {
        foreach ($routes as $route) {
            $this->addRoute($route);
        }
    }


    /**
     * @return array An array of routes.
     */
    public function getRoutes()
    {
        return $this->routes;
    }


    /**
     * @param string $routeName The route name.
     *
     * @return string
     */
    public function getPath($routeName)
    {
        if (! isset($this->routes[$routeName])) {
            throw new Exception("Route '$routeName' not found, please check if correct route name was used.");
        }

        return $this->routes[$routeName]->getUri();
    }


    /**
     * Route a request.
     *
     * @param RequestInterface $request A request.
     * @return ResolvedRequestInterface A resolved request.
     */
    abstract public function route(RequestInterface $request);
}
