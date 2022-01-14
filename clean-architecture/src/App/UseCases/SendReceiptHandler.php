<?php

declare(strict_types=1);

namespace Acme\App\UseCases;

use Acme\Domain\Payment\PaymentNumber;

class SendReceiptHandler
{
    public function __construct(
        private ExportReceiptHandler $exportReceipt,
        private EmailDispatcher $emailDispatcher,
    ) {}

    public function handle(SendReceipt $command): bool
    {
        // Export PDF
        $content = $this->exportReceipt->handle(
            new ExportReceipt($command->getPaymentNumber())
        );

        // Send email
        $email = $command->getUser()->getEmail();

    }
}
