<?php 

declare(strict_types=1);

namespace App\Desafios\LSP;

// Problema: A classe Retângulo não pode ser substituída pela classe Quadrado sem quebrar a funcionalidade esperada.
class Retangulo {
    protected $largura;
    protected $altura;
  
    public function setLargura($largura) {
      $this->largura = $largura;
    }
  
    public function setAltura($altura) {
      $this->altura = $altura;
    }
  
    public function getArea() {
      return $this->largura * $this->altura;
    }
}

?>