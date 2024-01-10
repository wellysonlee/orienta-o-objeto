<?php

use Well\Banco\Modelo\Conta\ContaPoupanca;
use Well\Banco\Modelo\Conta\ContaCorrente;
use Well\Banco\Modelo\Conta\Titular;
use Well\Banco\Modelo\CPF;
use Well\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
