<?php namespace Adapter;

class IntegracaoErp{

    public function token($apiKey){
        //Codigo de solicitação do token aqui ...
        // ...

        return 'TOKEN_GERADO_VIA_API';
    }

    public function pedido($pedido, $apiKey){
        // Codigo de envio do pedido aqui ...
        // ...

        return true;
    }


}