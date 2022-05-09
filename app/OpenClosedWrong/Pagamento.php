<?php

declare(strict_types=1);

namespace App\OpenClosedWrong;

use Exception;

class Pagamento
{
  protected $dadosPagamento;

  public function __construct(array $dadosPagamento)
  {
    $this->dadosPagamento = $dadosPagamento;

    $this->processaPagamento();
  }

  private function processaPagamento(): array
  {
    $this->validaDados();
    $this->enviaAntifraude();
    $this->geraPagamento();
    $this->notificaCliente();
    

    return [];
  }

  private function notificaCliente()
  {
    //Notifica o cliente por e-mail
  }

  private function geraPagamento()
  {
    //grava o pagamento
  }

  private function enviaAntifraude()
  {
    //envia requisição para o antifraude validar os dados da compra
  }

  private function validaDados()
  {
    //Realiza validação de dados do pagamento
  }
}