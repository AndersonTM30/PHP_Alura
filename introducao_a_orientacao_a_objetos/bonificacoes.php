<?php
    require_once 'autoload.php';

    use alura\banco\service\ControladorDeBonificacoes;
    use alura\banco\model\{Cpf};
    use alura\banco\model\funcionario\{Desenvolvedor, Gerente, Diretor};

    $umFuncionario = new Desenvolvedor(
        'Anderson Ferreira',
        new Cpf('123.456.789-85'),
        'Desenvolvedor',
        2000
    );

    $umFuncionario->sobeDeNivel();

    $umaFuncionaria = new Gerente(
        "Alana",
        new Cpf('898.654.315-66'),
        'Gerente',
        3000
    );

    $umDiretor = new Diretor(
        'Ana Paula',
        new Cpf('123789456-11'),
        'Diretor',
        5000
    );

    $controlador = new ControladorDeBonificacoes();
    $controlador->adicionaBonificacaoDe($umFuncionario);
    $controlador->adicionaBonificacaoDe($umaFuncionaria);
    $controlador->adicionaBonificacaoDe($umDiretor);

    echo $controlador->recuperaTotal();
