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
        echo "<h3>Operadores aritimeticos</h3>";
        $n1 = 1;
        $n2 = 2;

        echo "soma; " . $n1 + $n2 . "<br>";
        echo "subtracao; " . $n1 - $n2 . "<br>";
        echo "multiplicacao; " . $n1 * $n2 . "<br>";
        echo "divisao; " . $n1 / $n2 . "<br>";
        echo "modulo; " . $n1 % $n2 . "<br>";
        $n3 = "10";
        echo "soma; " . $n1 + $n3 . "<br>";
        
    ?>
</body>
</html>