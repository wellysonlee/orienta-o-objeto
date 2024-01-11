<?php

use Well\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Well\Banco\Modelo\{CPF, Endereco};
require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Wellyson Martins',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
