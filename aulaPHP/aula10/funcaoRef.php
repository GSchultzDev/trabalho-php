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

        function referencia(&$x) {
            $x = $x + 2;
            echo "<p>O valor de x = $x</p>";
        }

        echo "<h3>Funcao que retorna parametro por referencia</h3>";
        $a = 3;
        referencia($a);
        echo "<p>O valor de a = $a</p>";
    ?>
</body>
</html>