<?php
$arrayNotas = array(
    "aluno1" => 10,
    "aluno2" => 0,
    "aluno3" => 5,
    "aluno4" => 9,
    "aluno5" => 4,
    "aluno6" => 8,
);

// echo $arrayNotas["aluno3"];

$arrayNotasMatriz = [
    "aluno1" => [
        "nome" => "Lucas",
        "nota" => 10
    ],
    "aluno2" => [
        "nome" => "FErnadno",
        "nota" => 8
    ],
    "aluno3" => [
        "nome" => "João",
        "nota" => 10
    ]
];
echo $arrayNotasMatriz["aluno1"]["nome"];