<?php namespace Builder;

class FogueteProduct {

    protected $tanqueCombustivel;

    protected $modelo;

    protected $numeroMotores;

    protected $numeroLugares;

    public function __toString()
    {
        $result = "Foguete model: {$this->getModelo()}\n<br>";
        $result .= "Litros do tanque: {$this->getLitrosCombustivel()}\n<br>" ;
        $result .= "Número de motores: {$this->getNumeroMotores()}\n<br>" ;
        $result .= "Número de lugares: {$this->getNumeroLugares()}\n<br>" ;

        return $result;
    }

    public function getLitrosCombustivel(): float {
        return $this->litrosCombustivel;
    }

    public function setLitrosCombustivel(float $litrosCombustivel): FogueteProduct {
        $this->litrosCombustivel = $litrosCombustivel;
        return $this;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function setModelo(string $modelo): FogueteProduct {
        $this->modelo = $modelo;
        return $this;
    }

    public function getNumeroMotores(): int {
        return $this->numeroMotores;
    }

    public function setNumeroMotores(int $numeroMotores): FogueteProduct {
        $this->numeroMotores = $numeroMotores;
        return $this;
    }

    public function getNumeroLugares(): int {
        return $this->numeroLugares;
    }

    public function setNumeroLugares(int $numeroLugares): FogueteProduct{
        $this->numeroLugares = $numeroLugares;
        return $this;
    }
}

