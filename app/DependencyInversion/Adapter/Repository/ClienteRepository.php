<?php

declare(strict_types=1);

namespace App\DependencyInversion\Adapters\Repository;

use App\DependencyInversion\Domain\Entity\Cliente;
use App\DependencyInversion\UseCases\Contracts\ClienteRepository as ClienteRepositoryInterface;
use PDO;

class ClienteRepository implements ClienteRepositoryInterface
{
  protected $conn;
    
  public function __construct() {
    $this->conn = new PDO("mysql:host=127.0.0.1;post=3306;dbname=mainprojeto", 'root', 'root');
    $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  }

  public function create(Cliente $cliente)
  {
    try {
      //Realiza gravação do cliente
    } catch (\Throwable $th) {
      //Lançaria um erro
    }
  }
}
