<?php

declare(strict_types=1);

namespace Acme\Infra\Cli\Commands;

interface CommandInterface
{
    public function handle(array $parameters): void;
}
