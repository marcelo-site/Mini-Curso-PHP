<?php
$arrayFrutas = ["abacaxi", "banana", "uva", "laranja", "maçã"];
$arrayFrutasAssoc = [
       1 => "abacaxi",
       2 => "banana",
       3 => "uva",
       4 => "laranja",
       5 => "maçã"];
$arrayAlunos = [
    "Aluno1" => [
        "Nome" => "Maria",
        "Nota" => 0
    ],
    "Aluno2" => [
        "Nome" => "Luana",
        "Nota" => 8
    ],
    "Aluno3" => [
        "Nome" => "Lucas",
        "Nota" => 10
    ],
    "Aluno4" => [
        "Nome" => "Fernanda",
        "Nota" => 9
    ],
];

foreach($arrayFrutas as $v) {
    echo $v ."<br>";
}

echo "<br><hr><br>";

foreach($arrayFrutasAssoc as $key => $v) {
    echo "{$key} => {$v}" ."<br>";
}
echo "<br><hr><br>";
foreach ($arrayAlunos as $chave => $aluno) {
    foreach($aluno as $chave => $valor){
        echo "{$chave} = {$valor} <br>";
    }
    echo "<br>";
}