<?php namespace Prototype;

class Livro{

    public $titulo;

    public $assunto;

    public $nomeTitular;

    public function __construct(string $titulo, string $assunto)
    {
        $this->titulo = $titulo;
        $this->assunto = $assunto;
    }

    public function setNomeTitular(string $nomeTitular) {
        $this->nomeTitular = $nomeTitular;
    }
}