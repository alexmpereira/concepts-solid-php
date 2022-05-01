<?php

declare(strict_types=1);

namespace App\SingleResponsibility\Adapter\Http;

use App\SingleResponsibility\UseCases\SaveUserUseCase;

class SaveUserAction
{
    protected function handle(string $name, string $cpf, int $age): array
    {
      
      $input = [
        "name" => $name,
        "cpf" => $cpf,
        "age" => $age
      ];

      $createUser = new SaveUserUseCase($input);
      return ["API" => "Servidor de API Tiger Atacado. teste"];
    }
}
