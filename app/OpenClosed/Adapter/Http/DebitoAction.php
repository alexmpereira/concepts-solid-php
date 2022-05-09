<?php

declare(strict_types=1);

namespace App\OpenClosed\Adapter\Http;

use App\OpenClosed\Domain\Entity\Pagamento;
use App\OpenClosed\UseCases\Contracts\ProcessaPagamento;

final class DebitoAction implements ProcessaPagamento
{
    public function processaPagamento(Pagamento $dadosPagamento)
    {
      //Implementação do pagamento em debito
    }
}
