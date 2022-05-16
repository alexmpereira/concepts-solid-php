<?php

declare(strict_types=1);

namespace App\LiskovSubstitution;

interface Funcionario
{
    public function calcularSalario();
}

class Gerente implements Funcionario
{
  public function calcularSalario()
  {
    //coding loading...
  }
}

class Designer implements Funcionario
{
  public function calcularSalario()
  {
    //coding loading...
  }
}

class Desenvolvedor implements Funcionario
{
  public function calcularSalario()
  {
    //coding loading...
  }
}

class SistemaRh
{
  private function pagarFuncionario(Funcionario $funcionario)
  {
    $salario = $funcionario->calcularSalario();
    return $salario;
  }
}