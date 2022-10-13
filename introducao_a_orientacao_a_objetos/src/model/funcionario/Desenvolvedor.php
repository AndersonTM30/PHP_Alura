<?php 
    namespace alura\banco\model\funcionario;

    class Desenvolvedor extends Funcionario {
        public function sobeDeNivel() {
            return $this->recebeAumento($this->recuperaSalario() * 0.75);
        }
    }