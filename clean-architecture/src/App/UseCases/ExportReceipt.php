<?php

declare(strict_types=1);

namespace Acme\App\UseCases;

use Acme\Domain\Payment\PaymentNumber;

class ExportReceipt
{
    public function __construct(
        private PaymentNumber $paymentNumber,
    ) {}

    public function getPaymentNumber(): PaymentNumber
    {
        return $this->paymentNumber;
    }
}
