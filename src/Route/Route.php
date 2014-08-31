<?php

namespace Air\Routing\Route;

class Route implements RouteInterface
{
    /**
     * @var string $uri The URI.
     */
    protected $uri;


    /**
     * @var string $controller The controller name.
     */
    protected $controller;


    /**
     * @var string $action The controller action name.
     */
    protected $action;


    /**
     * @var string $type The request type.
     */
    protected $requestType;


    /**
     * @param string $uri The URI.
     * @param string $controller The controller name.
     * @param string $action The controller action name.
     * @param string $requestType The request type.
     */
    public function __construct($uri, $controller, $action, $requestType = 'GET')
    {
        $this->uri = $uri;
        $this->controller = $controller;
        $this->action = $action;
        $this->requestType = $requestType;
    }


    /**
     * @return string The URI.
     */
    public function getUri()
    {
        return $this->uri;
    }


    /**
     * @return string The request type.
     */
    public function getRequestType()
    {
        return $this->requestType;
    }


    /**
     * @return string The controller name.
     */
    public function getController()
    {
        return $this->controller;
    }


    /**
     * @return string The controller action name.
     */
    public function getAction()
    {
        return $this->action;
    }
}
