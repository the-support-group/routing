<?php

namespace Air\Routing\ResolvedRequest;

use Air\Routing\Route\RouteInterface;
use Air\HTTP\Request\RequestInterface;

class ResolvedRequest implements ResolvedRequestInterface
{
    /**
     * @var RequestInterface $request The request that was resolved.
     */
    protected $request;


    /**
     * @var RouteInterface $route The route that was resolved.
     */
    protected $route;


    /**
     * @var array $uriParameters The parameters matched when resolving the route. May be empty.
     */
    protected $uriParameters;


    /**
     * @param RequestInterface $request The original request.
     * @param RouteInterface $route The original route.
     * @param array $uriParameters Matched URI parameters.
     */
    public function __construct(RequestInterface $request, RouteInterface $route, array $uriParameters)
    {
        $this->route = $route;
        $this->request = $request;
        $this->uriParameters = $uriParameters;
    }


    /**
     * @return RequestInterface The original request.
     */
    public function getRequest()
    {
        return $this->request;
    }


    /**
     * @return RouteInterface The original route.
     */
    public function getRoute()
    {
        return $this->route;
    }


    /**
     * @return array Matched URI parameters.
     */
    public function getUriParameters()
    {
        return $this->uriParameters;
    }
}
