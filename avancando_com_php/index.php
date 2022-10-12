<?php
    #Importando arquivo externos
    require_once 'funcoes.php';
    
    $contasCorrentes = [
        '123.456.789-10' => [
            'titular' => 'Vinicius',
            'saldo' => 1000
        ], 
        '123.456.789-11' => [
            'titular' => 'Maria',
            'saldo' => 10000
        ], 
        '123.456.789-12' => [
            'titular' => 'Alberto',
            'saldo' => 300
        ]
    ];

    $contasCorrentes[] = [
        'titular' => 'Cláudia',
        'saldo' => 1500
    ];

    $contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);
    $contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 500);

    titularComLetrasMaiusculas($contasCorrentes['123.456.789-12']);

    unset($contasCorrentes['123.456.789-12']);
    echo "<ul>";
    // foreach ($contasCorrentes as $cpf => $conta) {
    //     // ['titular' => $titular, 'saldo' => $saldo] = $conta;
    //     // exibirMensagem("|Titular: $titular |CPF: {$cpf} |Saldo: $saldo|");
    //     exibeConta($conta);
    //     // exibirMensagem("==========================");
    // }
    // echo "</ul>";
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Contas Correntes</h1>
        <dl>
            <?php foreach($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular'];?> - <?= $cpf;?></h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo'];?>
            </dd>
            <?php } ?>
        </dl>
    </body>
    </html>