<?php

declare(strict_types=1);

namespace App\InterfaceSegregationWrond;

interface Personagem {
  public function atacar(Personagem $alvo);
  public function defender();
  public function usarMagia();
  public function pular();
}

class Cavaleiro implements Personagem {
  public function atacar(Personagem $alvo) {}
  public function defender() {}
  public function usarMagia() {}
  public function pular() {}
}

class Arqueiro implements Personagem {
  public function atacar(Personagem $alvo) {}
  public function defender() {}
  public function usarMagia() {}
  public function pular() {}
}

class Mago implements Personagem {
  public function atacar(Personagem $alvo) {}
  public function defender() {}
  public function usarMagia() {}
  public function pular() {}
}