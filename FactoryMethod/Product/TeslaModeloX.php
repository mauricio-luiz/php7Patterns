<?php namespace FactoryMethod\Product;

class TeslaModeloX implements CarroProduct
{
    public function acelerar(){
        echo "Acelerando Tesla Model X\n";
    }

    public function frear(){
        echo "Freando Tesla Model X\n";
    }

    public function trocarMarcha(){
        echo "Trocando marcha do Tesla Model X\n";
    }
}