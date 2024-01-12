<?php

use Well\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Paraipaba', 'Setor B', 'Rua', '720');
$outroEndereco = new Endereco('Fortaleza', 'Aldeota', 'Rua', '151');

echo $umEndereco.PHP_EOL;
echo $outroEndereco.PHP_EOL;