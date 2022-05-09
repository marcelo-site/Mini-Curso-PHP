<?php
function gravar(string $texto, string $arquivo) {
    $fp = fopen($arquivo, "a+");
    fwrite($fp, "{$texto} <br>\r\n");
    fclose($fp);
}
$data= date('d/m/Y H:i:s');