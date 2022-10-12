<?php
    function sacar(array $conta, float $valorASacar): array {
        if($valorASacar > $conta['saldo']) {
            exibirMensagem("Você não tem saldo suficiente para realizar o saque!");
        } else {
            $conta['saldo'] -= $valorASacar;
        }
        return $conta;
    }

    function depositar(array $conta, float $valorADepositar): array {
        if($valorADepositar > 0) {
            $conta['saldo'] += $valorADepositar;
        } else {
            exibirMensagem('Não é possível realizar saldo com valor negativo!');
        }
        return $conta;
    }

    function exibirMensagem(string $mensagem) {
        echo $mensagem . '<br>';
    }
    # passando o valor como referência
    function titularComLetrasMaiusculas(array &$conta) {
        $conta['titular'] = mb_strtoupper($conta['titular']);
    }

    function exibeConta(array $conta){
        ['titular' => $titular, 'saldo' => $saldo] = $conta;
        $html = "<li>Titular: $titular. Saldo: $saldo</li>";
    }