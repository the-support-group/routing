# Routing
The routing library includes classes for handling web application routing.

## Installation
Installation via [Composer](https://getcomposer.org/) is recommended.

    "require": {
        "air-php/routing": "dev-master"
    }

## Route
The `Route` object represents an application route. It includes:

* A URI
* The type of request the route handles (e.g. GET, POST etc.)
* The target controller to instantiate
* The target controller action to call

## Router
The `Router` object is responsible for routing a request. It's configured with one or more `Route` objects.

The `route()` method takes a `Request` object (compatible with Air's [request interface](https://github.com/air-php/http/blob/master/src/Request/RequestInterface.php)) and returns a `ResolvedRoute`. The method itself is abstract, allowing you to use routing logic of your choice.

## ResolvedRequest
A `ResolvedRequest` object represents a request which has been resolved by a `Router` object.

It includes the original `Request` and `Route` objects, along with the URI parameters that were matched during routing.