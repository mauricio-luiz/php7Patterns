<?php namespace Facade;

class ModuloControleClientes
{
    public function buscaCliente(string $cpfCliente): array
    {
        //Simula a busca de um cliente pelo seu CPF
        return [
            'nome' => 'Gabriel Anhaia',
            'telefone' => '9999999999',
            'email' => 'gabriel@mestredev.com.br'
        ];
    }
}