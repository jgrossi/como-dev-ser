<?php

declare(strict_types=1);

namespace Acme\App\UseCases;

use Acme\Domain\Payment\PaymentNumber;
use Acme\Domain\User\User;

class SendReceipt
{
    public function __construct(
        private PaymentNumber $paymentNumber,
        private User $user,
    ) {}

    public function getPaymentNumber(): PaymentNumber
    {
        return $this->paymentNumber;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
