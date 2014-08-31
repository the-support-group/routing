<?php

namespace Air\Routing\Tests;

use Air\Routing\Router\Router;
use Air\Routing\Route\Route;

class RouterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Router $router A router object.
     */
    private $router;


    /**
     * @var Route $route A route object.
     */
    private $route;


    /**
     * Setup a new router object for each test.
     */
    public function setUp()
    {
        $this->route = $this->getMockBuilder(Route::class)
                      ->disableOriginalConstructor()
                      ->getMock();

        $this->router = $this->getMockBuilder(Router::class)
                             ->setConstructorArgs([[$this->route, $this->route, $this->route]])
                             ->getMockForAbstractClass();
    }


    /**
     * Ensure the addRoute() method returns the expected value.
     */
    public function testAddRoute()
    {
        $this->router->addRoute($this->route);

        $this->assertEquals(4, count($this->router->getRoutes()));
    }


    /**
     * Ensure the addRoutes() method returns the expected value.
     */
    public function testAddRoutes()
    {
        $this->router->addRoutes([$this->route, $this->route, $this->route]);

        $this->assertEquals(6, count($this->router->getRoutes()));
    }


    /**
     * Ensure the getRoutes() method returns the expected value.
     */
    public function testGetRoutes()
    {
        $this->assertInternalType('array', $this->router->getRoutes());
        $this->assertEquals(3, count($this->router->getRoutes()));
    }
}
