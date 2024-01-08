<?php

require_once 'src/Conta.php';
<<<<<<< HEAD
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';


$endereco  = new Endereco('Paraipaba', 'Setor B', 'Rua Principal', '82');
$wellyson = new Titular(new CPF('123.456.789-10'), 'Wellyson Martins', $endereco);
=======
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$wellyson = new Titular(new CPF('123.456.789-10'), 'Wellyson Martins');
>>>>>>> 9c24270b4514a745076f1782f9b49779363b1dc6
$primeiraConta = new Conta($wellyson);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

<<<<<<< HEAD
$sara = new Titular(new CPF('698.549.548-10'), 'Sara Rodrigues', $endereco);
$segundaConta = new Conta($sara);
var_dump($segundaConta);

$outroEndereco = new Endereco('Fortaleza', 'Aldeota', 'Abolição', '45');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
=======
$sara = new Titular(new CPF('698.549.548-10'), 'Sara Rodrigues');
$segundaConta = new Conta($sara);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg'));
>>>>>>> 9c24270b4514a745076f1782f9b49779363b1dc6
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
