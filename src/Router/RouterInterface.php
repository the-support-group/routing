<?php

namespace Air\Routing\Router;

use Air\Routing\Route\RouteInterface;
use Air\Routing\ResolvedRequest\ResolvedRequestInterface;
use Air\HTTP\Request\RequestInterface;

interface RouterInterface
{
    /**
     * @param array $routes An array of routes.
     */
    public function __construct(array $routes);


    /**
     * @param RouteInterface $route A route.
     */
    public function addRoute(RouteInterface $route);


    /**
     * @param array $routes An array of routes.
     */
    public function addRoutes(array $routes);


    /**
     * @return array An array of routes.
     */
    public function getRoutes();


    /**
     * Route a request.
     *
     * @param RequestInterface $request A request.
     * @return ResolvedRequestInterface A resolved request.
     */
    public function route(RequestInterface $request);
}
