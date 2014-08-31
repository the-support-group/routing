<?php

namespace Air\Routing\ResolvedRequest\Tests;

use Air\Routing\Route\Route;
use Air\Routing\Route\RouteInterface;
use Air\Routing\ResolvedRequest\ResolvedRequest;
use Air\HTTP\Request\Request;
use Air\HTTP\Request\RequestInterface;

class ResolvedRequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ResolvedRequest A resolved request object.
     */
    private $resolvedRequest;


    /**
     * Setup a new resolved request object for each test.
     */
    public function setUp()
    {
        $request = $this->getMockBuilder(Request::class)
                        ->disableOriginalConstructor()
                        ->getMock();

        $route = $this->getMockBuilder(Route::class)
                      ->disableOriginalConstructor()
                      ->getMock();

        $this->resolvedRequest = new ResolvedRequest($request, $route, ['test' => 'test']);
    }


    /**
     * Ensure the getRequest() method returns the expected value.
     */
    public function testGetRequest()
    {
        $this->assertInstanceOf(RequestInterface::class, $this->resolvedRequest->getRequest());
    }


    /**
     * Ensure the getRoute() method returns the expected value.
     */
    public function testGetRoute()
    {
        $this->assertInstanceOf(RouteInterface::class, $this->resolvedRequest->getRoute());
    }


    /**
     * Ensure the getUriParameters() method returns the expected value.
     */
    public function testGetUriParameters()
    {
        $this->assertInternalType('array', $this->resolvedRequest->getUriParameters());
        $this->assertArrayHasKey('test', $this->resolvedRequest->getUriParameters());
        $this->assertEquals('test', $this->resolvedRequest->getUriParameters()['test']);
    }
}
