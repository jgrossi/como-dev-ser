<?php

declare(strict_types=1);

namespace Acme\Domain\Payment;

use DateTimeImmutable;

class Payment
{
    public function __construct(
        private PaymentNumber $number,
        private DateTimeImmutable $created,
    ) {}

    public function getNumber(): PaymentNumber
    {
        return $this->number;
    }

    public function getCreated(): DateTimeImmutable
    {
        return $this->created;
    }
}
