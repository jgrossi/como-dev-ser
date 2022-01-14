<?php

declare(strict_types=1);

namespace Acme\Domain\Payment;

use DateTimeImmutable;

class Receipt
{
    public function __construct(
        private Payment $payment,
        private DateTimeImmutable $created,
    ) {}

    public function getPayment(): Payment
    {
        return $this->payment;
    }

    public function getCreated(): DateTimeImmutable
    {
        return $this->created;
    }
}
