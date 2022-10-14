<?php
    namespace alura\banco\service;

    use alura\banco\model\Autenticavel;
    
    class Autenticador {
        public function tentaLogin(Autenticavel $autenticavel, string $senha): void {
           if($autenticavel->podeAutenticar($senha)) {
            echo "OK. Usuário logado no sistema";
           } else {
            echo "Ops. Senha incorreta";
           }
        }
    }