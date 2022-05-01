<?php

declare(strict_types=1);

namespace App\SingleResponsibility\Infra;

use App\SingleResponsibility\Infra\Contracts\MailerInterface as ContractsMailerInterface;

final class Mailer implements ContractsMailerInterface
{
    private $mail;

    public function __construct()
    {
      //Instância de library PHPMailer por exemplo
      //Configurações do email (host, username, password)
    }

    public function sendEmail(
        string $assunto,
        string $conteudo,
        array $destinatarios,
        array $copiaPara = []
    ): bool {
        $this->mail->Subject = $assunto;
        $this->mail->Body = $conteudo;

        // seta os destinatários dos emails
        if (!empty($destinatarios)) {
            foreach ($destinatarios as $value) {
                $email = $value['email'];
                $nome = $value['nome'];

                $this->mail->addAddress($email, $nome);
            }

            // adicionar cópias para outros destinatários
            if (!empty($copiaPara)) {
                foreach ($copiaPara as $value) {
                    $email = $value['email'];
                    $nome = $value['nome'];

                    $this->mail->addBCC($email, $nome);
                }
            }

            if (!$this->mail->send()) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }
}
