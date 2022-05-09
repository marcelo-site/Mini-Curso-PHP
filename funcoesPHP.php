<?php
$nome = "Marcelo Souza";
echo "<h2>Exibir partes de uma string</h2>";
echo substr($nome, 5, 8);

echo "<h2>Converter uma string em minuscula</h2>";
echo strtolower($nome);

echo "<h2>Converter uma string em maiuscula</h2>";
echo strtoupper($nome);

echo "<h2>Converter uma string em maiuscula</h2>";
echo strtoupper($nome);

echo "<h2>Retirar formato de tag</h2>";
$msg = "<strong>seja bem-vindo</strong><a href='#'>acesse o link</a>";
echo $msg;
echo "<br>";
$msg = strip_tags("<strong>seja bem-vindo</strong><a href='#'>acesse o link</a>", 'a');
echo $msg;

echo "<h2>Troca texto</h2>";
$msg1 = "Zezinho xingou fulano De burro";
echo $msg1;
$troca = str_replace("burro","***(palavra foi removida pois fere nossas regras de uso)", $msg1);
//str_ireplace() ignora case sensitive
echo "<br>";
echo $troca;
echo "<br>";
echo "<h2>Quebra strings em determminado ponto.</h2>";
$nome ="Francisco marcelo da silva souza";
echo $nome;
$explode = explode(" ", $nome);
echo "<br><br>";
foreach($explode as $v){
    echo $v . "<br>";
}
echo "<h2>Delimita quantidade de caracteres</h2>";
$nome = "Francisco Marcelo da Silva Souza";
$nome = "fulano";
// echo strlen($nome);
if (strlen($nome) < 20){
    echo "válido";
}else{
    echo "invalido";
};

