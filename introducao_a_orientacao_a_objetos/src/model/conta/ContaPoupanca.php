<?php
    namespace alura\banco\model\conta;
    use alura\banco\model\conta\ContaPoupanca;

    class ContaPoupanca extends conta {
        protected function percentualTarifa(): float {
            return 0.03;
        }
    }