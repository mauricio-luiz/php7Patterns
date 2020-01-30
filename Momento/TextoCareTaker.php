<?php namespace Momento;

class TextoCareTaker
{
    protected $estadosTexto = [];

    public function adicionarMomento(TextoMomento $textoMomento)
    {
        $this->estadosTexto[] = $textoMomento;
    }

    public function retornarUltimosEstadoSalvo() : TextoMomento
    {
        if(empty($this->estadosTexto)){
            return null;
        }

        $textoMomento = end($this->estadosTexto);
        unset($this->estadoTexto[sizeof($this->estadosTexto) - 1]);

        return $textoMomento;
    }
}