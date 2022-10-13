<?php 
    namespace alura\banco\model\funcionario;

    class Gerente extends Funcionario {
        public function calculaBonificacao(): float {
            return $this->recuperaSalario();
        }
    }