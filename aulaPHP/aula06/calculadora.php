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

        $n1 = $_GET["num1"];
        $n2 = $_GET["num2"];
        $co = $_GET["catOp"];
        $ca = $_GET["catAd"];
        $hi = $_GET["hipo"];
        $op = $_GET["oper"];

        if(!empty($n1) && !empty($n2) && empty($co) && empty($ca) && empty($hi)){
            $liberado = 1;
        }else if(!empty($co) && !empty($hi) && empty($ca) && empty($n1) && empty($n2)){
            $liberado =1;
        }else if(!empty($ca) && !empty($hi) && empty($co) && empty($n1) && empty($n2)){
            $liberado =1;
        }else if(!empty($ca) && !empty($co) && empty($hi) && empty($n1) && empty($n2)){
            $liberado =1;
        }

        if($liberado != 1) {
            echo "algo deu errado por favor volte e preencha novamente";
        }else {
            switch($op) {
                case 1;
                    $r = $n1 + $n2;
                    echo "$n1 + $n2 = $r";
                    break;
                case 2;
                    $r = $n1 - $n2;
                    echo "$n1 - $n2 = $r";
                    break;
                case 3;
                    $r = $n1 * $n2;
                    echo "$n1 * $n2 = $r";
                    break;
                case 4;
                    $r = $n1 / $n2;
                    echo "$n1 / $n2 = $r";
                    break;
                case 5;
                    $r = $co / $hi;
                    echo "$co / $hi = $r";
                    break;
                case 6;
                    $r = $ca / $hi;
                    echo "$ca / $hi = $r";
                    break;
                case 7;
                    $r = $co / $hi;
                    echo "$co / $hi = $r";
                    break;
                default ;
                    echo "operacao nao selecionada";
            }
        }
    ?>
    <br>
    <br>
    <a href="calculadora.html">Voltar</a>
</body>
</html>