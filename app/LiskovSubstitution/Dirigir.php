<?php

declare(strict_types=1);

namespace App\LiskovSubstitution;

abstract class Veiculo
{
    public function acelerar()
    {
        return "O carro está acelerando";
    }

    public function freiar()
    {
        return "O carro está parando";
    }

}

class Corsa extends Veiculo
{

}

class Piloto 
{
    protected $veiculo;
    public function __construct(Veiculo $veiculo)
    {
        $this->veiculo = $veiculo;
    }

    public function acelarCarro()
    {
        return $this->veiculo->acelerar();
    }
}

$corsa = new Corsa();
$piloto1 = new Piloto($corsa);
echo $piloto1->acelarCarro();

/**
 * Caso surja a necessidade de ter veiculos aereos,
 * podemos mudar nossa classe principal (Veiculo)
 * 
 */

abstract class VeiculoTerrestre
{
    public function acelerar()
    {
        return "O carro está acelerando";
    }

    public function freiar()
    {
        return "O carro está parando";
    }
}

abstract class VeiculoAereo
{
    public function acelerar()
    {
        return "O carro está acelerando";
    }

    public function freiar()
    {
        return "O carro está parando";
    }

    public function aterrissar()
    {
        return "Está aterrissando";
    }
}