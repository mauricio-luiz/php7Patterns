<?php namespace FactoryMethod\Product;

class TeslaModeloS implements CarroProduct
{
    public function acelerar(){
        echo "Acelerando Tesla Model S\n";
    }

    public function frear(){
        echo "Freando Tesla Model S\n";
    }

    public function trocarMarcha(){
        echo "Trocando marcha do Tesla Model S\n";
    }
}