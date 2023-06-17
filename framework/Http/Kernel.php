<?php

namespace Khamdullaevuz\Framework\Http;

class Kernel
{
    public function handle(Request $request): Response
    {
        return new Response($request->data());
    }
}