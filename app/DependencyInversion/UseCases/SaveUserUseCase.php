<?php

declare(strict_types=1);

namespace App\DependencyInversion\UseCases;

use App\DependencyInversion\UseCases\Contracts\ClienteRepository as ClienteRepositoryInterface;
use App\DependencyInversion\Domain\Entity\Cliente;
use App\DependencyInversion\Infra\Mailer;

final class SaveUserUseCase
{
    private ClienteRepositoryInterface $clienteRepository;
    private Mailer $mailer;
    private Cliente $cliente;

    public function __construct(array $cliente)
    {
        $this->clienteRepository = new ClienteRepositoryInterface();
        $this->mailer = new Mailer();

        $this->cliente = new Cliente($cliente);

        /**
         * Instead of directly calling the ClienteRepository, we call and use the interface
         * We can use for example the DI lib to do this dependency inversion for our application
         */
        $this->clienteRepository->create($this->cliente);

        $this->mailer->sendEmail(
          "Bem vindo ao sistema", 
          "Cadastrado com sucesso em nosso sistema", 
          ["alexmpprog@gmail.com"], 
          [""]
        );
    }
}
