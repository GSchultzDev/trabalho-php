<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../css/index.css">
</head>
<body>
    <button class="voltar"><a href="index.php"><i class="bi bi-box-arrow-in-left"></a></i></button>

    
<?php

$idade = $_GET["idade"];

if(empty($idade) || is_nan($idade) || $idade < 0){
    echo "volte e digite a idade corretamente";
}else if($idade >= 18) {
    echo "voce tem $idade anos </br>";
    echo "voce pode tirar uma carteira de motorista";
}else if($idade < 18) {
    echo "voce tem $idade anos </br>";
    echo "voce nao pode tirar uma carteira de motorista";
}
?>
<a href="if_else.html">Voltar</a>
    
</body>
</html>
