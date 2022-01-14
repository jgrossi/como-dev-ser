<?php

declare(strict_types=1);

namespace Acme\Infra\Http\Controllers;

use Acme\App\UseCases\ExportReceipt;
use Acme\App\UseCases\ExportReceiptHandler;
use Acme\Domain\Payment\PaymentNumber;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ExportReceiptController implements ControllerInterface
{
    public function __construct(
        private ExportReceiptHandler $exportReceipt,
    ) {}

    public function handle(RequestInterface $request): ResponseInterface
    {
        $data = json_decode(
            json: $request->getBody(),
            associative: true,
        );

        $content = $this->exportReceipt->handle(
            new ExportReceipt(
                new PaymentNumber($data['payment_number'])
            )
        );

        // Download the PDF content
    }
}
