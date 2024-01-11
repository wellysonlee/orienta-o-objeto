<?php

require_once 'autoload.php';


use Well\Banco\Service\ControladorDeBonificacoes;
use Well\Banco\Modelo\{CPF, Funcionario};

$umFuncionario = new Funcionario(
    'Wellyson Martins',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umaFuncionaria = new Funcionario(
    'Lara Lopes',
    new CPF('987.654.321-10'),
    'Gerente',
    3000
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();