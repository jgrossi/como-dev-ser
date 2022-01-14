<?php

declare(strict_types=1);

namespace Acme\Infra;

use Acme\App\Exporters\ReceiptExporterInterface;
use Acme\Domain\Payment\Receipt;
use Dompdf\Dompdf;

class DompdfReceiptExporter implements ReceiptExporterInterface
{
    public function __construct(
        private Dompdf $exporter,
    ) {}

    public function export(Receipt $receipt): string
    {
        return '';
    }
}