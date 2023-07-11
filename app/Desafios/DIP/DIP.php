<?php 
declare(strict_types=1);

namespace App\Desafios\DIP;
// Problema: A classe ProcessadorPedido depende diretamente da classe BancoDados.
class ProcessadorPedido {
    private $bancoDados;
  
    public function __construct() {
      $this->bancoDados = new BancoDados();
    }
  
    public function processarPedido($pedido) {
      // Lógica para processar o pedido utilizando o banco de dados.
    }
}

?>