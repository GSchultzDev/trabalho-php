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

        $valor = $_GET["num"];
        $op = $_GET["oper"];


        if(empty($valor) || is_nan($valor)) {
            echo "Algo deu errado volte e preencha novamente";
        }else {
            switch($op) {
                case 1:
                    $r = $valor - ($valor * 0.1);
                    echo "O valor total com pagamento a vista e desconto de 10% = $r";
                    break;
                case 2:
                    $r = $valor + ($valor * 0.05);
                    echo "O valor total com pagamento a vista e desconto de 10% = $r";
                    break;
                case 3:
                    $r = $valor + ($valor * 0.1);
                    echo "O valor total com pagamento a vista e desconto de 10% = $r";
                    break;
                default :
                echo "Nao foi selecionada uma forma de pagamento";
            }
        }
    ?>

<br>
<br>
<a href="switch.html">Voltar</a>

</body>
</html>