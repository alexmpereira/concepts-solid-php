<?php

declare(strict_types=1);

namespace App\LiskovSubstitution;

class Passaro
{
    public function voar()
    {

    }
}

/**
 * Todo Pombo é passaro 
 * E todo Pombo sabe voar
 */
class Pombo extends Passaro
{

}

/**
 * Aveztrus é um passaro porém ele nao sabe voar...
 * Para esse caso, vamos precisar implementar no método voar
 * um throw exception, dizendo que ele nao voa (vamos precisar lancar um erro)
 * Ou no método voar, adicionar um if
 * verificando se a instancia for aveztruz ignorar
 * Com isso quebramos o principio 2 do open/closed
 */
class Aveztruz extends Passaro
{

}

/**
 * Para resolver isso, podemos criar
 * uma interface com habilidade de voar
 * E apenas as especies que voam, pode implementar essa interface
 * E a classe Passaro, nao precisa ter mais o método voar
 */
interface HabilidadeDeVoar
{
    public function voar();
}