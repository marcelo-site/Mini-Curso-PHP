<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="cep">Consulte seu cep:</label>
        <input id="cep" type="number" name="cep">
        <input type="submit" value="Consultar">
    </form>
    <?php
    $cep = filter_input(INPUT_GET, "cep");
    
    if (isset($cep)){
    $cep = str_replace("-", "", $cep);
    $str1 = file_get_contents("https://viacep.com.br/ws/$cep/json/");
    $arrayEndereco = json_decode($str1); 
    }
    $rua = $arrayEndereco->logradouro ?? '';
    $bairro= $arrayEndereco->bairro ?? '';
    $cidade = $arrayEndereco->localidade ?? '';
    $estado = $arrayEndereco ->uf ?? '';
    ?>
    <p><strong>Rua: </strong><?=$rua;?></p>
    <p><strong>Bairro: </strong><?=$bairro;?></p>
    <p><strong>Cidade: </strong><?=$cidade;?></p>
    <p><strong>Estado: </strong><?=$estado;?></p>
</body>
</html>
