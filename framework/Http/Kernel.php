<?php

namespace Khamdullaevuz\Framework\Http;

class Kernel
{
    public function __construct(
        public readonly Router $router
    )
    {
    }

    public function handle(Request $request): Response
    {
        return $this->router->handle($request);
    }
}