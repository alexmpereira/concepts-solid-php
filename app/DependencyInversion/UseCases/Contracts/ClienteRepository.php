<?php

declare(strict_types=1);

namespace App\DependencyInversion\UseCases\Contracts;

use App\DependencyInversion\Domain\Entity\Cliente;

interface ClienteRepository
{
    public function create(Cliente $cliente);
}
