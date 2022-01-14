<?php

declare(strict_types=1);

namespace Acme\App\Repositories;

use Acme\Domain\Payment\PaymentNumber;
use Acme\Domain\Payment\Receipt;

interface ReceiptRepositoryInterface
{
    public function getByPaymentNumber(PaymentNumber $number): Receipt;
}