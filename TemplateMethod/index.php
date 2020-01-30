<?php require_once('../autoloader.php');

$impostosAlimentacao = new \TemplateMethod\ImpostosAlimentacao();
$impostosVestuario = new \TemplateMethod\ImpostosVestuario();
$impostosEletronicos = new \TemplateMethod\ImpostosEletronicos();

echo "Preço final de alimentação: " . $impostosAlimentacao->calculaImpostoProduto(10);

echo "<br>\n";

echo "Preço final de vestuario: " . $impostosVestuario->calculaImpostoProduto(10);

echo "<br>\n";

echo "Preço final de eletronicos: " . $impostosEletronicos->calculaImpostoProduto(10);

echo "<br>\n";