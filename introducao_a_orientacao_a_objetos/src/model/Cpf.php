<?php
    namespace alura\banco\model;
    use alura\banco\model\Cpf;
    class Cpf {
        private string $cpf;

        public function __construct(string $cpf) {

            // $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP. [
            //     'options' => [
            //         'regex' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            //     ]
            //     ]);
            //     if ($cpf === false) {
            //         echo "Cpf inválido!";
            //         exit();
            //     }
            $this->cpf = $cpf;
        }

        public function recperaCpfPessoa() : string {
            return $this->cpf;
        }
    }