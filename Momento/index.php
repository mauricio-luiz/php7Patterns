<?php require_once("../autoloader.php");

$texto = new \Momento\Texto();

$texto->escreverTexto("A");
$texto->escreverTexto("B");
$texto->escreverTexto("C");

echo $texto->retornaTexto();
echo "<br>\n";

$texto->desfazerEscrita();
echo $texto->retornaTexto();
