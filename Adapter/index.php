<?php
require_once('../autoloader.php');

$integracaoLegado = new \Adapter\IntegracaoErp();

$integracaoErpAdapter = new \Adapter\IntegracaoErpAdapter($integracaoLegado);

$token = $integracaoErpAdapter->gerarToken('123456', 'GABRIEL_ANHAIA');

$pedidoDeTeste = new \Adapter\Pedido();

$pedidoDeTeste->setValorTotal(3509.50);
$pedidoDeTeste->setNumeroPedido(123456);
$pedidoDeTeste->addProduto('IPhone X');
$pedidoDeTeste->addProduto('Carregador Sem Fila - IPhone X');

$tokenTeste = 'XYZ123456ABC';
$pedidoEnviadoComSucesso = $integracaoErpAdapter->enviarPedido($pedidoDeTeste, $tokenTeste);

if($pedidoEnviadoComSucesso){
    echo 'Pedido enviado com sucesso';
}