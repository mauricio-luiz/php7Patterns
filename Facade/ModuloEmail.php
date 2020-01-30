<?php namespace Facade;

class ModuloEmail
{
    public function validaServidorDeEmails() : bool
    {
        //Valida se o servidor de emails está funcionando
        return true;
    }

    public function enviaMensagem(
        string $nomeRemetente,
        string $nomeDestinatario,
        string $enderecoEmailDestinatario,
        string $mensagem
    ): bool {
        //Simula envio de mensagem de email
        echo "Email enviado com sucesso\n";
        return true;
    }
}