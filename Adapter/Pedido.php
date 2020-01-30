<?php namespace Adapter;

class Pedido {

    protected $numeroPedido;

    protected $valorTotal;

    protected $produtos;

    public function addProduto (string $produto ){
        $this->produtos[] = $produto;
        return $this;
    }

    public function setNumeroPedido($numeroPedido){
        $this->numeroPedido = $numeroPedido;
    }

    public function getNumeroPedido(){
        return $this->numeroPedido;
    }

    public function setValorTotal($valorTotal){
        $this->valorTotal = $valorTotal;
    }

    public function getValorTotal(){
        return $this->valorTotal;
    }

    public function setProdutos($produtos){
        $this->produtos = $produtos;
    }

    public function getProdutos(){
        return $this->produtos;
    }
}