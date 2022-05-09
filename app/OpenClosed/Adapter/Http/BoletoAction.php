<?php

declare(strict_types=1);

namespace App\OpenClosed\Adapter\Http;

use App\OpenClosed\Domain\Entity\Pagamento;
use App\OpenClosed\UseCases\Contracts\ProcessaPagamento;

final class BoletoAction implements ProcessaPagamento
{
    public function processaPagamento(Pagamento $dadosPagamento)
    {
      //Gera os boletos para pagamento
    }
}
