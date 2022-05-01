<?php

declare(strict_types=1);

namespace App\SingleResponsibility\UseCases\Contracts;

use App\SingleResponsibility\Domain\Entity\Cliente;

interface ClienteRepository
{
    public function create(Cliente $cliente);
}
