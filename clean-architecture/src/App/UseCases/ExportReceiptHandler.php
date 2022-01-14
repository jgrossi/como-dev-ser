<?php

declare(strict_types=1);

namespace Acme\App\UseCases;

use Acme\App\Exporters\ReceiptExporterInterface;
use Acme\App\Repositories\ReceiptRepositoryInterface;

class ExportReceiptHandler
{
    public function __construct(
        private ReceiptRepositoryInterface $repository,
        private ReceiptExporterInterface $exporter,
    ) {}

    public function handle(ExportReceipt $command): string
    {
        $receipt = $this->repository->getByPaymentNumber(
            $command->getPaymentNumber()
        );

        return $this->exporter->export($receipt);
    }
}
