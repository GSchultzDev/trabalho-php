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
    $n1 = $_GET["n1"];
    $n2 = 1;
    $r = 0;

    if(!is_null($n1) && !is_nan($n1)){
        echo "<h3>Tabuada do numero $n1</h3>";
        
        do {
        $r = $n1 * $n2;

        echo "$n1 * $n2 = $r<br>";

        $n2++;
        } while ($n2 <= 10);
    } else {
        echo "Algo nao foi preenchido corretamente";
    }
    ?>
    <a href="tabuada.php">Voltar</a>
</body>
</html>