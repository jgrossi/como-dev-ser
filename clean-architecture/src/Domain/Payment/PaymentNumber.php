<?php

declare(strict_types=1);

namespace Acme\Domain\Payment;

use JetBrains\PhpStorm\Pure;

class PaymentNumber
{
    public function __construct(
        private string $number,
    ) {}

    public function getValue(): string
    {
        return $this->number;
    }

    public function __toString(): string
    {
        return $this->getValue();
    }
}
