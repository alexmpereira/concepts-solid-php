<?php

declare(strict_types=1);

namespace App\SingleResponsibility\UseCases;

use App\SingleResponsibility\Adapters\Repository\ClienteRepository;
use App\SingleResponsibility\Domain\Entity\Cliente;
use App\SingleResponsibility\Infra\Mailer;

final class SaveUserUseCase
{
    private ClienteRepository $clienteRepository;
    private Mailer $mailer;
    private Cliente $cliente;

    public function __construct(array $cliente)
    {
        $this->clienteRepository = new ClienteRepository();
        $this->mailer = new Mailer();

        $this->cliente = new Cliente($cliente);
        $this->clienteRepository->create($this->cliente);
        $this->mailer->sendEmail(
          "Bem vindo ao sistema", 
          "Cadastrado com sucesso em nosso sistema", 
          ["alexmpprog@gmail.com"], 
          [""]
        );
    }
}
