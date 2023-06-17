<?php

namespace Khamdullaevuz\Framework\Http;

class Router
{
    public function __construct(
        public readonly array $routes
    )
    {
    }

    public function handle(Request $request): Response
    {
        $uri = $request->uri();
        $method = $request->method();
        $data = $request->data();

        if (!array_key_exists($uri, $this->routes)) {
            return new Response([
                'message' => 'Not found'
            ]);
        }

        if (!array_key_exists($method, $this->routes[$uri])) {
            return new Response([
                'message' => 'Method not allowed'
            ]);
        }

        $callback = $this->routes[$uri][$method];

        if (!is_callable($callback)) {
            return new Response([
                'message' => 'Internal server error'
            ]);
        }

        return new Response($callback($data));
    }
}