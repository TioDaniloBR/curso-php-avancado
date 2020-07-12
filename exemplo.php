<?php

require_once "vendor/autoload.php";

use \TioDaniloBR\BuscaCep\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipcode('08390350');

print_r($resultado);

echo('<br>Cep: '.$resultado['cep'].'<br>Rua: '.$resultado['logradouro']);

