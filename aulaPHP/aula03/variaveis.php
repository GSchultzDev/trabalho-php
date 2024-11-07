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
    echo "<h3>Variaveis</h3>";

    $var1 = 40;
    $var2 = 45;
    $var3 = "aprendendo PHP!";
    
    echo $var1;
    echo "<br>";
    echo $var2;
    echo "<br>";
    echo $var3;
    echo "<br>";

    $var2 = "variaveis dinamicas!";

    echo $var2;
    
    echo "<br>";
    echo "<br>";

    echo "<h3>Constante</h3>";
    
    
    define ("SALARIO", 954);

    echo "o salario minimo e: ".SALARIO;
    ?>
</body>
</html>