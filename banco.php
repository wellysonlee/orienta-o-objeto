<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Pessoa.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';


$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$wellyson = new Titular(new CPF('123.456.789-10'), 'Wellyson Martins', $endereco);
$primeiraConta = new Conta($wellyson);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$sara = new Titular(new CPF('698.549.548-10'), 'sara', $endereco);
$segundaConta = new Conta($sara);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
