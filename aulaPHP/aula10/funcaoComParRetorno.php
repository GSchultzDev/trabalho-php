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
        function soma($a, $b){
            $s = $a + $b;
            return $s;
        }

        echo "<h3>Funcao com retorno</h3>";
        $x = 20;
        $y = 30;
        $r = soma($x, $y);
        echo "Asoma entre $x e $y = $r";
    ?>
</body>
</html>