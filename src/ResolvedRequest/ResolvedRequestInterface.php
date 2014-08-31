<?php

namespace Air\Routing\ResolvedRequest;

use Air\Routing\Route\RouteInterface;
use Air\HTTP\Request\RequestInterface;

interface ResolvedRequestInterface
{
    /**
     * @return RequestInterface The original request.
     */
    public function getRequest();


    /**
     * @return RouteInterface The original route.
     */
    public function getRoute();


    /**
     * @return array Matched URI parameters.
     */
    public function getUriParameters();
}
