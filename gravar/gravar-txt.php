<?php
$arquivo = "file.txt";
function gravar(string $texto, string &$arquivo) {
    $fp = fopen($arquivo, "a+");
    fwrite($fp, "{$texto} <br>\r\n");
    fclose($fp);
}
$data= date('d/m/Y H:i:s');
gravar("Persistencia em arquivo texto3. em {$data}", $arquivo);

function leitura(string &$arquivo) {
    $fp = fopen($arquivo, "r");
    $texto = fread($fp, filesize($arquivo));
    fclose($fp);
    return $texto; 
}

echo leitura($arquivo);