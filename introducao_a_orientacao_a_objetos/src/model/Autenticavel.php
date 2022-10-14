<?php
    namespace alura\banco\model;
    
    interface Autenticavel {
        public function podeAutenticar(string $senha): bool;
    }