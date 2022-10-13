<?php
    require_once 'autoload.php';

    use alura\banco\service\ControladorDeBonificacoes;
    use alura\banco\model\{Cpf, Funcionario};

    $umFuncionario = new Funcionario(
        'Anderson Ferreira',
        new Cpf('123.456.789-85'),
        'Desenvolvedor',
        2000
    );

    $umaFuncionaria = new Funcionario(
        "Alana",
        new Cpf('898.654.315-66'),
        'Gerente',
        3000
    );

    $controlador = new ControladorDeBonificacoes();
    $controlador->adicionaBonificacaoDe($umFuncionario);
    $controlador->adicionaBonificacaoDe($umaFuncionaria);

    echo $controlador->recuperaTotal();
