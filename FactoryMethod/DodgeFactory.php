<?php namespace FactoryMethod;

use Exception;
use FactoryMethod\Product\{
    CarroProduct, DodgeCharger, DodgeDart
};

class DodgeFactory implements CarroFactory
{
    /**
     * @param string $modeloCarro
     * @return CarroProduct
     * @throws Exception
     */
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if($modeloCarro == 'charger'){
            return new DodgeCharger();
        }elseif($modeloCarro == 'dart'){
            return new DodgeDart();
        }else{
            throw new Exception("Modelo de carro \"{$modeloCarro}\" não existe no sistema.");
        }
    }
}