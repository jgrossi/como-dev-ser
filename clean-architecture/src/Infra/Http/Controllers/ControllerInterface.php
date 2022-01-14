<?php

declare(strict_types=1);

namespace Acme\Infra\Http\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface ControllerInterface
{
    public function handle(RequestInterface $request): ResponseInterface;
}
