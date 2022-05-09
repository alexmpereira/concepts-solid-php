<?php

declare(strict_types=1);

namespace App\OpenClosed\Adapter\Http;

use App\OpenClosed\Domain\Entity\Pagamento;
use App\OpenClosed\UseCases\Contracts\ProcessaPagamento;

final class CartaoAction implements ProcessaPagamento
{
    public function processaPagamento(Pagamento $dadosPagamento)
    {
      //$this->enviaAntifraude();
      //$this->geraPagamento();
    }
}
