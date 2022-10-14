<?php
    namespace alura\banco\model\funcionario;
    use alura\banco\model\Cpf;
    use alura\banco\model\Pessoa;
    abstract class Funcionario extends Pessoa {
        private float $salario;

        public function __construct(string $nome, Cpf $cpf, $salario) {
            parent::__construct($nome, $cpf);
            $this->salario = $salario;
        }

        public function alteraNome(string $nome): void {
            $this->validaNome($nome);
            $this->nome = $nome;
        }

        public function recebeAumento(float $valorAumento): void {
            if($valorAumento < 0) {
                echo "Aumento deve ser positivo";
                return;
            }
            $this->salario += $valorAumento;
        }

        public function recuperaSalario(): float {
            return $this->salario;
        }

        abstract public function calculaBonificacao(): float;
    }