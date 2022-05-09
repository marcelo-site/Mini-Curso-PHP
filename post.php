<?php
$arrayNome = ["Selecione","Fernando", "Marcelo", "Francisco","Juvenal", "João"];
$nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_EMAIL);
$funcionarioCod = filter_input(INPUT_POST, "funcs", FILTER_SANITIZE_NUMBER_INT);
$funcionario = "";
if($funcionarioCod){
    $funcionario = $arrayNome[$funcionarioCod];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input, select{
            padding: 5px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="">
    <ul>
        <li>Nome: <input type="text" name="txtNome"></li>
        <li>E-mail: <input type="text" name="txtEmail"></li>
        <li>Funcionarios:
            <select name="funcs" id="">
                <?php
                for($i=0 ; $i < count($arrayNome); $i++) {
                    ?>
                    <option value="<?= $i;?>"><?=$arrayNome[$i];?></option>
                    <?php
                }
                ?>
            </select>
        </li>
        <li><button type="submit" name="btnsubmit" value="Cadastrar">Cadastrar</button></li>
    </ul>
    </form>
    <br><hr><br>
    <p>Nome: <?=$nome?></p>
    <p>E-mail: <?=$email?></p>
    <p>Funcionario: <?=$funcionario?></p>
</body>
</html>