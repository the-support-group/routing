<?php

namespace Air\Routing\Route;

interface RouteInterface
{
    /**
     * @return string The name of the route.
     */
    public function getName();


    /**
     * @return string The URI.
     */
    public function getUri();


    /**
     * @return string The request type.
     */
    public function getRequestType();


    /**
     * @return string The controller name.
     */
    public function getController();


    /**
     * @return string The controller action name.
     */
    public function getAction();
}
