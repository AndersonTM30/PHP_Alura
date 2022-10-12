<?php
    $idadeList = [21, 23, 19, 25, 30, 41, 18];
    for($i = 0; $i < sizeof($idadeList); $i++) {
        $idadeAluno = $idadeList[$i];
        echo "Idade do aluno $i: $idadeAluno\n";
    }