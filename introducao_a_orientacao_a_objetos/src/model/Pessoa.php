<?php
    namespace alura\banco\model;
    use alura\banco\model\Pessoa;
    class Pessoa {
        protected string $nome;
        private Cpf $cpf;

        public function __construct($nome, $cpf) {
            $this->validaNomeTitular($nome);
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        public function recuperaNome(): string {
            return $this->nome;
        }

        public function recuperaCpf(): string {
            return $this->cpf->recuperaNumero();
        }

        # esse método é usado internamente para validar o tamanho do nome do titular da conta
        protected function validaNomeTitular(string $nomeTitular) {
            if(strlen($nomeTitular) < 5) {
                echo "Nome precisa ter pelo menos 5 caracteres";
                exit();
            }
        }
    }