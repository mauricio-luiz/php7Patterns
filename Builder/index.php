<?php
require_once('../autoloader.php');


$montadoraDeFoguetesTestI = new \Builder\FabricaFogueteDirector(new Builder\FogueteModeloIBuilder());
$montadoraDeFoguetesTestII = new \Builder\FabricaFogueteDirector(new Builder\FogueteModeloIIBuilder());

$montadoraDeFoguetesTestI->construirFoguete();
echo $montadoraDeFoguetesTestI->getFoguete();

$montadoraDeFoguetesTestII->construirFoguete();
echo $montadoraDeFoguetesTestII->getFoguete();