<?php

declare(strict_types=1);

namespace Acme\Infra;

use Acme\App\Repositories\ReceiptRepositoryInterface;
use Acme\Domain\Payment\PaymentNumber;
use Acme\Domain\Payment\Receipt;
use PDO;

class MySqlReceiptRepository implements ReceiptRepositoryInterface
{
    public function __construct(
        private PDO $pdo,
    ) {}

    public function getByPaymentNumber(PaymentNumber $number): Receipt
    {
        // TODO
    }
}
