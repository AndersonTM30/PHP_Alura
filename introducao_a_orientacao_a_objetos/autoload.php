<?php
    spl_autoload_register(function (string $nomeCompletoDaCalsse){
        $caminhoDoArquivo = str_replace('alura\\banco', 'src', $nomeCompletoDaCalsse);
        $caminhoDoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoDoArquivo);
        $caminhoDoArquivo .= '.php';

        if(file_exists($caminhoDoArquivo)) {
            require_once $caminhoDoArquivo;
        }
    });
