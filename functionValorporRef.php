<?php
$salario = 1567.77;
$valorAjuste = 0;

function ajustaSal($sal , &$valorAjuste){
    $valorAjuste = 300.00;
    return ($sal + $valorAjuste);
}
$valorFinal= ajustaSal($salario, $valorAjuste);
    echo "O valor ajuste com o ajuste é de : <strong>R$ {$valorFinal}</strong> com aumento de <strong>R$ {$valorAjuste}</strong>.";
