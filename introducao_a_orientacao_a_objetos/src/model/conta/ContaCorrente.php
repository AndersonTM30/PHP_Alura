<?php
    namespace alura\banco\model\conta;

    use alura\banco\model\conta\ContaCorrente;

    class ContaCorrente extends Conta {
        protected function percentualTarifa(): float {
            return 0.05;
        }
    }