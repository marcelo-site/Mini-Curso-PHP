<?php
include('gravar.php');
gravar("gravar {$data}", "file.txt");

include 'ler.php';
echo leitura('file.txt');