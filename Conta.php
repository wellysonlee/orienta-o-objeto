<?php

class Conta {
    public $cpf;
    public $nome;
    public $saldo = 0;

    public function sacar (float $valorASacar) : void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível.";
            return;
        }
        
        $this->saldo -= $valorASacar;
        
    }

    public function depositar (float $valorADepositar) : void
    {
        if ($valorADepositar < 0) {
            echo "O valor precisa ser positivo.";
            return;
        } 

        $this->saldo += $valorADepositar;
        
    }

    public function transferor (float $valorATransferir, conta $contaDestino) : void
    {
        if ($valorATransferir < $this->saldo) {
            echo "Saldo indisponível.";
            return;
        } 

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
        
    }
}