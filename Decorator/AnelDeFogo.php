<?php namespace Decorator;

class AnelDeFogo extends PersonagemDecorator
{
    public function __construct(Personagem $pesonagem)
    {
        parent::__construct($pesonagem);
        $this->ataque = 3;
    }

}