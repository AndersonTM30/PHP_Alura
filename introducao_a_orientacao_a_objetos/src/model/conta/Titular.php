<?php
    namespace alura\banco\model\conta;
    
    use alura\banco\model\Autenticavel;
    use alura\banco\model\Cpf;
    use alura\banco\model\Endereco;
    use alura\banco\model\Pessoa;

    class Titular extends Pessoa implements Autenticavel {
        private $endereco;

        public function __construct(Cpf $cpf, string $nome, Endereco $endereco) {
            parent::__construct($nome, $cpf);
            $this->endereco = $endereco;
        }

        public function recuperaEndereco(): Endereco {
            return $this->endereco;
        }  

        public function podeAutenticar(string $senha): bool {
            return $senha === 'abcd';
        }
    }
