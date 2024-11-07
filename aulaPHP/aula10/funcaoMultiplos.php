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
        function soma() {
            $v = func_get_args();
            $t = func_num_args();
            $s = 0;

            for ($i = 0; $i < $t; $i++){
                $s = $s + $v[$i];
            }
            return $s;
        }

        echo "<h3>Soma da funcao com multiplos parametros</h3>";
        $r = soma(3, 5, 2, 8, 9, 4);
        echo "Asoma = $r";
    ?>
</body>
</html>