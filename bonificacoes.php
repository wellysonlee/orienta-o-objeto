<?php

require_once 'autoload.php';


use Well\Banco\Service\ControladorDeBonificacoes;
use Well\Banco\Modelo\{CPF};
use Well\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'Wellyson Martins',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Lara Lopes',
    new CPF('987.654.321-10'),
    'Gerente',
    3000
);

$umDiretor = new Diretor(
    'Weslley Martins',
    new CPF('781.654.848-10'),
    'Diretor',
    5000
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->recuperaTotal();