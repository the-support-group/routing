<?php

namespace Air\Routing\Tests;

use Air\Routing\Route\Route;

class RouteTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Route $route A route.
     */
    private $route;


    /**
     * Setup a new route object for each test.
     */
    public function setUp()
    {
        $this->route = new Route('/contact-us/', 'Contact', 'contact', 'GET');
    }


    /**
     * Ensure the getUri() method returns the expected value.
     */
    public function testGetUri()
    {
        $this->assertInternalType('string', $this->route->getUri());
        $this->assertEquals('/contact-us/', $this->route->getUri());
    }


    /***
     * Ensure the getRequestType() method returns the expected value.
     */
    public function testGetRequestType()
    {
        $this->assertInternalType('string', $this->route->getRequestType());
        $this->assertEquals('GET', $this->route->getRequestType());
    }


    /**
     * Ensure the getController() method returns the expected value.
     */
    public function testGetController()
    {
        $this->assertInternalType('string', $this->route->getController());
        $this->assertEquals('Contact', $this->route->getController());
    }


    /**
     * Ensure the getAction() method returns the expected value.
     */
    public function testGetAction()
    {
        $this->assertInternalType('string', $this->route->getAction());
        $this->assertEquals('contact', $this->route->getAction());
    }
}
