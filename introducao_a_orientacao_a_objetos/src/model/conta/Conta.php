<?php
    namespace alura\banco\model\conta;
    use alura\banco\model\conta\Conta;
    #uma classe é um modelo do objeto
    class Conta {
        #atributos do objeto
        private $titular;
        private float $saldo;
        private static $numeroDeContas = 0;# atributo estático da classe para acesso geral dos objetos
        /**
         * @var int tipo 1 = Conta Corrente; 2 = Conta Poupança
         */
        private int $tipo;

        #método construtor para inicializar os atributos
        public function __construct(Titular $titular, $tipo) {
            $this->titular = $titular;
            $this->saldo = 0;#definindo um valor padrão para o atributo
            $this->tipo = $tipo;

            self::$numeroDeContas++;
        }
        # Se o objeto não estiver associado a uma variável, ele é removido da memória
        public function __destruct() {
            if(self::$numeroDeContas > 1) {
                echo "Há mais de uma conta ativa";
            }
            self::$numeroDeContas--;
        }

        #Métodos da classe
        public function sacar(float $valorASacar): void {
            if($this->tipo === 1) {
                $tarifaDeSaque = $valorASacar * 0.05;
            } else {
                $tarifaDeSaque = $valorASacar * 0.03;
            }

            $valorSaque = $valorASacar + $tarifaDeSaque;

            if($valorASacar > $this->saldo) {
                echo "Saldo indisponível!";
                return;
            } 
            $this->saldo -= $valorSaque;
        }
        # métodos do tipo void são utilizados quando não tem retorno
        public function depositar(float $valorADepositar): void {
            if($valorADepositar < 0 ) {
                echo "Valor precisa ser positivo \t";
                return;
            } 
            $this->saldo += $valorADepositar;
        }

        public function transferir($valorATransferir, Conta $contaDestino): void {
            if ($valorATransferir > $this->saldo) {
                echo "Saldo indisponível";
                return;
            }
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }

        public function recuperarSaldo() : float {
            return $this->saldo;
        }        

        public function recuperarNomeTitular() : string {
            return $this->titular->recuperaNome();
        }

        public function recperarCpfTitular() : string {
            return $this->cpf->recuperaCpf();
        }
        # esse método é usado internamente para validar o tamanho do nome do titular da conta
        private function validaNomeTitular(string $nomeTitular) {
            if(strlen($nomeTitular) < 5) {
                echo "Nome precisa ter pelo menos 5 caracteres!";
                exit();
            }
        }

        public static function recuperaNumeroDeContas(): int {
            return self::$numeroDeContas;
        }
    }
