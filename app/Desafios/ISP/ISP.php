<?php 
declare(strict_types=1);

namespace App\Desafios\ISP;

// Problema: A interface Dispositivo possui métodos desnecessários para alguns dispositivos.
interface Dispositivo {
    public function ligar();
    public function desligar();
    public function aumentarVolume();
    public function diminuirVolume();
    public function reproduzir();
    public function pausar();
}

?>