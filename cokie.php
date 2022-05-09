<?php
$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);
switch ($req){
    case 1 :
        criar();
        break;
    case 2 :
        ler();
        break;
    case 3 :
        alterar();
        break;
    case 4 :
        delete();
        break;
}
function criar() {
    echo "Criar";
    setcookie('nome', "Marcelo", time() +100);
}
function ler(){
    echo filter_input(INPUT_COOKIE, "nome", FILTER_SANITIZE_STRING);
}
function alterar(){
    echo "Alterar";
    setcookie("nome", "Marcio");
}
function delete(){
    echo "Deletar";
    setcookie("nome", "Marcio", time()-1);
 
}