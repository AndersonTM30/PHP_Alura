<?php
    namespace alura\banco\model\conta;
    use alura\banco\model\conta\ContaPoupanca;

    class ContaPoupanca extends conta {
        public function sacar(float $valorASacar): void {
            $tarifaDeSaque = $valorASacar * 0.03;
            $valorSaque = $valorASacar + $tarifaDeSaque;

            if($valorASacar > $this->saldo) {
                echo "Saldo indisponível!";
                return;
            } 
            $this->saldo -= $valorSaque;
        }
    }