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
    $nome = !empty($_GET["nome"]) ? $_GET["nome"] : "[campo vazio]";
$ano = !empty($_GET["ano"]) ? $_GET["ano"] : "[campo vazio]";
$sexo = !empty($_GET["sexo"]) ? $_GET["sexo"] : "[campo vazio]";
$idade = $ano != "[campo vazio]" ? date("Y") - $ano : "[campo vazio]";

echo "<h3> Recebendo dados do formulario 2 </h3>";
echo "$nome e do sexo $sexo e tem $idade anos </br>";
?>
<a href="form2.html">Voltar</a>

</body>
</html><?php
