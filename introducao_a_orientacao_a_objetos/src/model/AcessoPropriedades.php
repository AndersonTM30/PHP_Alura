<?php
    namespace alura\banco\model;

    trait AcessoPropriedades {
        public function __get(string $nomeAtributo) {
            //adiciona a primeira letra maiúscula e concatena com o nome recupera
            $metodo = 'recupera' . ucfirst($nomeAtributo);
            return $this->$metodo();
        }
    }