<?php

    require_once 'autoload.php';

    use alura\banco\model\conta\Titular;
    use alura\banco\model\Endereco;
    use alura\banco\model\Cpf;
    use alura\banco\model\Funcionario;
    use alura\banco\model\conta\Conta;

    $endereco = new Endereco('Maceió', 'Canaã', 'Porto Calvo', '560 C');
    $anderson = new Titular(new Cpf("123.456.789-10"), "Anderson", $endereco);
    #adiciona uma nova conta em uma variável
    $novaConta = new Conta($anderson);

    $novaConta  ->  recuperarSaldo();
    $novaConta  ->  depositar(300);
    $novaConta  ->  sacar(50);

    $sirley = new Titular(new Cpf("123.456.789-11"), "Sirley", $endereco);
    $segundaConta = new Conta($sirley);
    $segundaConta -> recuperarSaldo();
    $segundaConta -> depositar(3500);
    $segundaConta -> depositar(-100);
    $segundaConta -> transferir(500, $novaConta);

    $umFuncionario = new Funcionario("Felipe", new Cpf('123.456.789-78'), "Engenheiro");

    var_dump($novaConta, $segundaConta, $umFuncionario);
    echo "Número de contas cadastradas: " . Conta::recuperaNumeroDeContas() . PHP_EOL;