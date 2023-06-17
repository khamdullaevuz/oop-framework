<?php

namespace Khamdullaevuz\Framework\Interfaces;

use Khamdullaevuz\Framework\Http\Request;
use Khamdullaevuz\Framework\Http\Response;

interface KernelInterface
{
    public function handle(Request $request): Response;
}