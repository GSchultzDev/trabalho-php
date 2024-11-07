<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../css/index.css">
</head>
<body>
    <button class="voltar"><a href="index.php"><i class="bi bi-box-arrow-in-left"></a></i></button>

    <?php
    $valor = $_GET["v"];
    $pi = intval($valor);
    echo "<h3> Recebendo dados do formulario 1 </h3>";
    echo "A parte inteira de $valor = $pi </br>";
    ?>
    </br>
    <a href="form1.html">Voltar</a>
</body>
</html>