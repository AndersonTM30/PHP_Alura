<?php
    # No php é possível adicionar nomes nos índices do array para poder percorrer um dado específico
    $contasCorrentes = [
        12345678910 => [
            'titular' => 'Vinicius',
            'saldo' => 1000
        ], 
        12345678911 => [
            'titular' => 'Maria',
            'saldo' => 10000
        ], 
        12345678912 => [
            'titular' => 'Alberto',
            'saldo' => 300
        ]
    ];

    foreach ($contasCorrentes as $cpf => $conta) {
       echo "Titular: " . $conta['titular'] . PHP_EOL;
       echo "CPF: " . $cpf . PHP_EOL;
       echo "Saldo: " . $conta['saldo'] . PHP_EOL;
       echo "==========================". PHP_EOL;
    }