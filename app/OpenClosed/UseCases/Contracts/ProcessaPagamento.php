<?php

declare(strict_types=1);

namespace App\OpenClosed\UseCases\Contracts;

use App\OpenClosed\Domain\Entity\Pagamento;

interface ProcessaPagamento
{
    public function processaPagamento(Pagamento $dadosPagamento);
}
