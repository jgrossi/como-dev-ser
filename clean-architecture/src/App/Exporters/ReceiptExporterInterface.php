<?php

declare(strict_types=1);

namespace Acme\App\Exporters;

use Acme\Domain\Payment\Receipt;

interface ReceiptExporterInterface
{
    public function export(Receipt $receipt): string;
}
