
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>Usuario: <input name="txtName" type="text" ></li>
            <li>Senha: <input name="txtSenha" type="password"></li>
            <li><input type="submit" value="Entrar"><a href="↑↑↑http://localhost/curso-php/criptografia.php">Atualizar</a></li>
        </ul>
    </form>
    <?php
// $s = 'olá mundo!';
// echo sha1($s);
// echo "<br>";
// echo md5($s);
// echo "<br>";
// //base_encode
// $b = base64_encode('ola mundo');
// echo "<br>";
// echo $b;
// echo "<br>";
// echo base64_decode($b);
//form
$nome = filter_input(INPUT_POST, "txtName", FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, "txtSenha", FILTER_SANITIZE_EMAIL);
?>
    <p><?="Usuario: ".$nome;?></p>
    <p><?="Senha: ".md5($senha);?></p>
</body>
</html>


