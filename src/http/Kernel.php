<?php

namespace DMC\Framework\Http;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Kernel
{
    public function handle(Request $request): Response
    {
        $dispatcher = simpleDispatcher(function (RouteCollector $routeCollector) {
            $routeCollector->addRoute('GET', '/', function(){
                $content = "<h1>Hello World</h1>";
                return new Response($content);
            });
        });

        $routeInfo = $dispatcher->dispatch(
            $request->getMethod(), 
            $request->getUri()
        );
        var_dump($routeInfo);
    }
}
