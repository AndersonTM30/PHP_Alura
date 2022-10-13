<?php 
    namespace alura\banco\model\funcionario;

    class EditorVideo extends Funcionario {
        public function calculaBonificacao(): float {
            return 600.0;
        }
    }