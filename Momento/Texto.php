<?php namespace Momento;

class Texto
{
    protected $texto;

    protected $textoCareTaker;

    public function __construct()
    {
        $this->textoCareTaker = new TextoCareTaker();
        $this->texto = '';
    }

    public function escreverTexto(string $texto)
    {
        $this->textoCareTaker->adicionarMomento(new TextoMomento($this->texto));
        $this->texto .= $texto;
    }

    public function desfazerEscrita()
    {
        $this->texto = $this
                        ->textoCareTaker
                        ->retornarUltimosEstadoSalvo()
                        ->getTexto();
    }

    public function retornaTexto() : string
    {
        return $this->texto;
    }
}