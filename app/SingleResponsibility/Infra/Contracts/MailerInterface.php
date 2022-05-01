<?php

declare(strict_types=1);

namespace App\SingleResponsibility\Infra\Contracts;

interface MailerInterface
{
    public function sendEmail(string $assunto, string $conteudo, array $destinatarios, array $copiaPara = []): bool;
}
