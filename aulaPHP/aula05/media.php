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

$nome = $_POST["nome"];
$n1 = $_POST["nota1"];
$n2 = $_POST["nota2"];
$n3 = $_POST["nota3"];
$n4 = $_POST["nota4"];


$verifica = array($n1, $n2, $n3, $n4);
$teste;
$resultado;


foreach($verifica as $x){
    if(empty($x) || is_nan($x) || $x > 10 || $x < 0){
        $teste =1;
    }
}


if($teste != 1 && !empty($nome)){

    $soma = $n1 + $n2 + $n3 + $n4;
    $media = $soma/4;

    if($media < 3) {
        $resultado = "reprovou";
    } else if($media < 6) {
        $resultado = "esta de recuperacao";
    } else {
        $resultado = "passou de semestre";
    }


    echo "O aluno $nome ficou com uma media: $media e $resultado.";
}else {
    echo "algum valor foi inserido de forma errada ou esta faltando por favor votle e preencha novamente.";
}

?>
<br>
<a href="media.html">Voltar</a>
</body>
</html>
