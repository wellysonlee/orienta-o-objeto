<?php

use Well\Banco\Modelo\CPF;
use Well\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Well\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($umDiretor, '4321');
