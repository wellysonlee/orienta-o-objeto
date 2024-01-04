<?php

require_once(__DIR__ . '/Conta.php');

$primeiraConta = new Conta('087.204.653-27','Wellyson Martins');
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo $primeiraConta->recuperaSaldo().PHP_EOL;
