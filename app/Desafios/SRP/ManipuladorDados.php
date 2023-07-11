<?php 

declare(strict_types=1);

namespace App\Desafios\SRP;

// Problema: A classe ManipuladorDados tem responsabilidades misturadas.
class ManipuladorDados {
    private $dados = [];
  
    public function salvarDados($dados) {
      // Lógica para salvar os dados em um arquivo.
    }
  
    public function calcularMedia() {
      // Lógica para calcular a média dos dados armazenados.
    }
}

?>