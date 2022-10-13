<?php
    namespace alura\banco\service;
    use alura\banco\model\Funcionario;
    
    class ControladorDeBonificacoes {
        private $totalBonificacoes = 0;

        public function adicionaBonificacaoDe(Funcionario $funcionario) {
            $this->totalBonificacoes += $funcionario->calculaBonificacao();
        }

        public function recuperaTotal(): float {
            return $this->totalBonificacoes;
        }
    }