<?php

declare(strict_types=1);

namespace Acme\Infra\Cli\Commands;

use Acme\App\UseCases\ExportReceiptHandler;

class SaveReceiptAsPdfCommand implements CommandInterface
{
    public function __construct(
        private ExportReceiptHandler $handler,
    ) {}

    public function handle(array $parameters): void
    {
        //
    }
}
