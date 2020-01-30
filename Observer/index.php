<?php require_once("../autoloader.php");

$controleEstoqueSubject = new \Observer\ControleEstoqueSubject();

$controleRequisicaoComprarObserver = new \Observer\ControleRequisicoesCompraObserver();
$emailObserver = new \Observer\EmailObserver();

$controleEstoqueSubject->adicionarObserver($controleRequisicaoComprarObserver);
$controleEstoqueSubject->adicionarObserver($emailObserver);

$controleEstoqueSubject->notificarObservers(123);